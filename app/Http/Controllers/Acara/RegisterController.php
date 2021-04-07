<?php

namespace App\Http\Controllers\Acara;

use View;
use Session;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;
use Webpatser\Uuid\Uuid;

use App\Models\User;
use App\Models\File;
use App\Models\UserPayments;
use Illuminate\Support\Facades\Storage;

class RegisterController extends Controller
{

    public function index(Request $request)
    {
        if (session("lpkn_ref_email")) {
            return redirect()->route('referral.pendaftaran');
        }

        return redirect()->route('landing');

        $params = $request->all();

        $data = array();

        if (isset($params['ref'])) {
            $data['ref'] = $params['ref'];
        }

        return View::make('pages.acara.register', $data);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, array(
            'nama_lengkap' => "required",
            'email' => "required|unique:users",
            'no_hp' => "required",
            'instansi' => "required",
            // 'affiliasi' => "affiliasi",
            // 'nama_bank' => "nama_bank",
            // 'no_rek' => "no_rek",
            // 'nama_rek' => "nama_rek",
            // 'kota' => "required",
            // 'jenis_kelamin' => "required",
            'ref' => "sometimes",
        ));

        if ($validator->fails()) {
            return response()->json([
                'status'    => "fail",
                'messages' => $validator->errors()->first(),
            ], 422);
        }

        if (substr($data['no_hp'], 0, 1) == '0') {
            $no_hp = substr_replace($data['no_hp'], "", 0, 1);
        } else {
            $no_hp = $data['no_hp'];
        }

        $ref = $this->generate_referral(6);

        $input = array(
            'name' => $data['nama_lengkap'],
            'email' => $data['email'],
            'password' => Hash::make($ref),
            'hp' => $no_hp,
            // 'gel' => $data['gel'],
            'instansi' => $data['instansi'],
            'affiliasi' => $data['affiliasi'],
            'nama_bank' => $data['nama_bank'],
            'no_rek' => $data['no_rek'],
            'nama_rek' => $data['nama_rek'],
            // 'jenis_kelamin' => $data['jenis_kelamin'],
            // 'kota' => $data['kota'],
            'ref' => $ref,
            'ref_by' => isset($data['ref']) ? $data['ref'] : null,
        );

        $user = User::firstOrCreate($input);

        // Mail::to($user->email)->send(new OrderShipped('Pendaftaran Berhasil!', $user, 'email.template_register'));

        $this->send_wa($user);

        Session::put('lpkn_ref_email', $data['email']);
        Session::put('selesai_pendaftaran', $data['email']);

        $user = User::with('mengundang:ref_by,name,instansi', 'diundang')->where('email', $data['email'])->first();
        $harga = 1250000;
        $user->total_harga = (int) $harga + $user->id;
        // Mail::to($data['email'])->send(new OrderShipped('Pendaftaran Berhasil!', $user, 'email.template_register'));

        return response()->json([
            'status'    => "ok",
            'messages' => "Berhasil registrasi acara",
            'route' => route('referral.pendaftaran')
        ], 200);
    }

    public function send_wa($user)
    {
        $harga = env('HARGA_EVENT', 0);
        $total_harga = (int) $harga + $user->id;

        //send wa
        $messages =
            'Selamat datang ' . $user->name . ' ☺️

Kami sudah terima registrasi Anda,
*' . env('JENIS', 0) . '*
*' . env('JUDUL_2', 0) . '*
' . env('JUDUL_DESCRIPTION', 0) . '

Silahkan transfer senilai *Rp.' . number_format($total_harga, 0, ",", ".") . '* ke rekening dibawah ini:

BRI
No. Rek. 213501000250301
Atas Nama: Lembaga Pengembangan dan Konsultasi Nasional

Mohon upload Bukti transfer di link ' . route("landing") . '

*Download surat* : ' . asset('') . 'surat.pdf

Komunikasi selanjutnya dengan panitia :
WhatsApp Only :
*https://wa.me/' . env('WA_1', 0) . '*
Panitia :
*' . env('WA_2', 0) . '*
*' . env('WA_3', 0) . '*

Terimakasih


*Info:*
Setelah Anda melakukan upload bukti pembayaran silahkan tunggu konfirmasi pembayaran dari Panitia,
Setelah di konfirmasi maka anda akan mendapatkan *WhatsApp* ke nomor handphone Anda berupa link Group WhatsApp

*Kunjungi juga Website* : https://www.LPKN.id';

        $data_wa = array(
            'phone' => '62' . $user->hp,
            'body' => $messages
        );

        $data_string = json_encode($data_wa);
        $ch = curl_init(env('WA_URL') . '/sendMessage?token=' . env('WA_TOKEN'));

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_VERBOSE, 0);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 15);
        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data_string)
            )
        );
        $result = curl_exec($ch);
    }

    public function update(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, array(
            'file' => "required|mimes:jpg,jpeg,png"
        ));

        if ($validator->fails()) {
            return response()->json([
                'status'    => "fail",
                'messages' => $validator->errors()->first(),
            ], 422);
        }

        $user = User::where('email', session('lpkn_ref_email'))->first();

        if ($user) {
            $uId = (string) Uuid::generate();
            $folder = "upload_pembayaran";
            $path = 'dokumen/' . ((int) ($user->id / 100)) . "/" . $user->id . "/" . $folder;
            $fileName = $request->file->getClientOriginalName();

            $path = Storage::disk('public_uploads')->put(
                $path,
                $request->file('file')
            );

            $filedata = [
                'name' => $fileName,
                'address' => $uId,
                'path' => $path,
                'folder' => $folder,
                'created_by' => $user->id,
                'updated_by' => $user->id
            ];
            $file = File::firstOrCreate($filedata);

            $input = array(
                'file_id' => $file->id
            );

            $UserPayments = UserPayments::updateOrCreate(['user_id' => $user->id], $input);

            return response()->json([
                'status'    => "ok",
                'messages' => "Berhasil registrasi acara",
                'route' => route('referral.pendaftaran')
            ], 200);
        } else {
            return response()->json([
                'status'    => "fail",
                'messages' => "Session anda telah berakhir harap refresh halaman..",
            ], 422);
        }
    }

    public function generate_referral($length)
    {
        $str_result = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        return substr(str_shuffle($str_result), 0, $length);
    }
}
