<?php

namespace App\Http\Controllers;

use View;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\Models\User;
use App\Models\ReferrCount;
use App\Models\ReferrCountTerverifikasi;

class ReferralController extends Controller
{

    public function index()
    {
        if(!session("lpkn_ref_email")){
            return redirect()->route('landing');
        }

        $user = User::with('mengundang:ref_by,name,instansi','diundang', 'mengundang_terverifikasi')->where('email', session('lpkn_ref_email'))->first();
        $jumlah_affiliate = $user->mengundang->count();
        $jumlah_affiliate_terverifikasi = $user->mengundang_terverifikasi->count();
        $ref_count = ReferrCount::with('user')->orderBy('jumlah', 'desc')->get();
        $ref_count_terverifikasi = ReferrCountTerverifikasi::with('user')->orderBy('jumlah', 'desc')->get();
        $pemenang = ReferrCountTerverifikasi::with('user')->orderBy('jumlah', 'desc')->limit(10)->get();

        // $data = [
        //     "msg_wa" => "*Ikuti Workshop Online – GRATIS*\n*SISTEM MANAJEMEN MUTU*\n(Understanding and Implementing ISO 9001 : 2015)\n\nHari *Kamis, 12 November 2020*\nJam *13.00 – 15.00 WIB*\n\n*Target Workshop :*\n•  Memahami perkembangan ISO 9000 seri\n•  Konsep-konsep sistem manajemen mutu\n•  Memahami persyaratan-persyaratan standar ISO 9001: 2015 \n•  Mampu menetapkan langkah-langkah pengembangan\n•  Mampu mengidentifikasi sumber daya \n•  Mampu mengembangkan Sistem Manajemen Mutu \n*Fasilitas Gratis:*\n•  Mengikuti Workshop\n•  Materi Pelatihan\n•  E-Sertifikat\n•  Video Pembelajaran\nBuruan daftar, *Terbatas Hanya untuk 5.000 Peserta*\n\n*Selengkapnya :Klik ",
        //     "msg_twitter" => "Ikuti Workshop Online – GRATIS\nSISTEM MANAJEMEN MUTU\n(Understanding and Implementing ISO 9001 : 2015)\n\nHari Kamis, 12 November 2020\nJam 13.00 – 15.00 WIB\n\nSelengkapnya :Klik ",
        //     "msg_fb" => "Ikuti Workshop Online – GRATIS\nSISTEM MANAJEMEN MUTU\n(Understanding and Implementing ISO 9001 : 2015)\n\nHari Kamis, 12 November 2020\nJam 13.00 – 15.00 WIB\n\nSelengkapnya :Klik ",
        //     "msg_akhir_wa" =>"*\n\nSampai Ketemu Via Online pada Kamis, 12 November 2020",
        //     "msg_akhir" =>"Download Brosur https://diklatonline.id/brosur.jpg",
        //     "user" => $user,
        //     "ref_count" => $ref_count,
        //     "pemenang" => $pemenang
        // ];

        $data = [
            "msg_wa" => "*Workshop Vendor Konstruksi (kelas online)* \n\n*Sukses Mengikuti Tender dan Melaksanakan Kontrak Jasa konstruksi*\n(How To Win Construction Tenders)\n\n5 Sesi Pertemuan\n19 – 23 Januari 2021\n13.00 – 15.30 WIB\n\n*Yang Anda Dapatkan*\n• 5 Kali sesi pelatihan\n• Materi Narasumber\n• Grup Diskusi Pengadaan telegram\n• Sertifikat Pelatihan\n• Grup Diskusi\n• Rekaman Video Pembelajaran\n\n*Biaya Rp. 750.000,-*\n\n*Link Registrasi*",
            "msg_twitter" => "WORKSHOP ONLINE\nMENULIS\nSEMUDAH TERSENYUM & UPDATE STATUS\n(Strategi Membuat tulisan yang Menarik dan Laris)\n\nHari Selasa – Kamis / 24 – 26 November 2020\n\nSelengkapnya Klik ",
            "msg_fb" => "*Workshop Online*\nPelatihan dan Sertifikasi Hypnotherapy\n*FUNDAMENTAL & ADVANCED HYPNOTHERAPY*\nGelar Profesi / Non Akademik (CH & CHt) dari Indonesian Board of Hypnotherapy (IBH)\n\n7 Sesi Pertemuan\n7 - 14 Desember 2020\n18.30 - 21.00 WIB\n\n*SILABUS PELATIHAN :*\n•  Fundamental Hypnotherapy (3 Sesi Pertemuan)\n•  Advanced Hypnotherapy (2 Sesi Pertemuan)\n•  Smart – Self Healing (2 sesi Pertemuan)\n\n*Selengkapnya klik :* ",
            "msg_akhir_wa" =>"\nWhatsApp Only : \n*https://wa.me/".env('WA_1', 0)."*\n*Kontak Panitia*\n*https://wa.me/".env('WA_2', 0)."*\n\nDownload Brosur ".url('/download_brosur'),
            "msg_akhir" =>"\n\nDownload Brosur ".url('/download_brosur'),
            "user" => $user,
            "jumlah_affiliate" => $jumlah_affiliate,
            "jumlah_affiliate_terverifikasi" => $jumlah_affiliate_terverifikasi,
            "ref_count" => $ref_count,
            "ref_count_terverifikasi" => $ref_count_terverifikasi,
            "pemenang" => $pemenang
        ];

        // if ($user->send_wa == 0) {
        //     $this->send_wa($user);
        // }

        return View::make('pages.acara.referral', $data);
    }

    public function terundang()
    {   
        if(request()->ajax() || !request()->ajax()) {
            $query = User::with('mengundang','diundang')->where('email', session('lpkn_ref_email'))->first()->mengundang;
            // die(json_encode($query));
            return datatables()->of($query)
                ->addColumn('nama', function($query){
                    return $query->name;
                })
                ->addColumn('status_pembayaran', function($query){
                    return $query->status_pembayaran == 1 ? 'Sudah membayar' : 'Teregistrasi';
                })
                ->rawColumns(['nama', 'status_pembayaran'])
                ->addIndexColumn()
                ->make(true);
        }


        // $user = User::with('mengundang:ref_by,name,instansi','diundang')->where('email', session('lpkn_ref_email'))->first();

        // return response($user['mengundang']);
    }

    public function send_wa($user){
        //update status send
        $user->send_wa = 1;
        $user->save();
        //send wa
        $messages =
        'Halo Bapak/Ibu '.$user->name.'
        ';

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

    public function download_brosur()
    {
        $pathToFile = storage_path('public');

        return response()->download('brosur.jpg');
    }
}
