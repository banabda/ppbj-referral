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
        if(session("lpkn_ref_email")){
            return redirect()->route('referral.pendaftaran');
        }
        
        return redirect()->route('landing');

        $params = $request->all();

        $data = array();

        if(isset($params['ref'])){
            $data['ref'] = $params['ref'];
        }

        return View::make('pages.acara.register', $data);
    }

    public function store(Request $request){
        $data = $request->all();

        $validator = Validator::make($data, array(
            'nama_lengkap' => "required",
            'email' => "required|unique:users",
            'no_hp' => "required",
            'instansi' => "required",
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

        $ref = $this->generate_referral(6);

        $input = array(
            'name' => $data['nama_lengkap'],
            'email' => $data['email'],
            'password' => Hash::make($ref),
            'hp' => $data['no_hp'],
            'instansi' => $data['instansi'],
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
        
        $user = User::with('mengundang:ref_by,name,instansi','diundang')->where('email', $data['email'])->first();
        $harga = 1250000;
		$user->total_harga = (int) $harga + $user->id;
        // Mail::to($data['email'])->send(new OrderShipped('Pendaftaran Berhasil!', $user, 'email.template_register'));

        return response()->json([
            'status'    => "ok",
            'messages' => "Berhasil registrasi acara",
            'route' => route('referral.pendaftaran')
        ], 200);

    }
    
    public function send_wa($user){
        $harga = 1250000;
		$total_harga = (int) $harga + $user->id;

        //send wa
        $messages =
'Selamat datang di Workshop Online kami '.$user->name.' ☺️

Kami sudah terima registrasi Anda,
Pelatihan dan Sertifikasi Hypnotherapy
*FUNDAMENTAL & ADVANCED HYPNOTHERAPY*
Gelar Profesi / Non Akademik (CH & CHt) dari Indonesian Board of Hypnotherapy (IBH)

Silahkan transfer senilai *Rp.'.number_format($total_harga, 0 , ",", ".").'* ke rekening dibawah ini:

BRI
No. Rek. 213501000250301
Atas Nama: Lembaga Pengembangan dan Konsultasi Nasional

Mohon upload Bukti transfer di link https://hypnotherapy.diklatonline.id/

Komunikasi selanjutnya dengan panitia :
WhatsApp :
*https://wa.me/628111102495*
*https://wa.me/628111109423*

Terimakasih

*Info:*
Setelah Anda melakukan upload bukti pembayaran silahkan tunggu konfirmasi pembayaran dari Panitia,
Setelah di konfirmasi maka anda akan mendapatkan *WhatsApp* ke nomor handphone Anda berupa link Group WhatsApp';

        $data_wa = array(
           'phone' => '62'.$user->hp,
           'body' => $messages
        );

        $data_string = json_encode($data_wa);
        $ch = curl_init('https://eu143.chat-api.com/instance143450/sendMessage?token=5c4z26obzhwaq41d');

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_VERBOSE, 0);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 15);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
           'Content-Type: application/json',
           'Content-Length: ' . strlen($data_string)
           )
        );
        $result = curl_exec($ch);
    }

    public function update(Request $request){
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

        if($user){
            $uId = (string) Uuid::generate();
            $folder = "upload_pembayaran";
            $path = 'dokumen/'. ((int) ($user->id / 100)) . "/". $user->id . "/". $folder;
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
        }else{
            return response()->json([
                'status'    => "fail",
                'messages' => "Session anda telah berakhir harap refresh halaman..",
            ], 422);
        }


    }

    public function generate_referral($length){
        $str_result = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890'; 
        return substr(str_shuffle($str_result), 0, $length);
    }
}
