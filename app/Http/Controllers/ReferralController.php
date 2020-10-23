<?php

namespace App\Http\Controllers;

use View;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\Models\User;
use App\Models\ReferrCount;

class ReferralController extends Controller
{

    public function index()
    {
        if(!session("lpkn_ref_email")){
            return redirect()->route('acara.pendaftaran');
        }

        $user = User::with('mengundang:ref_by,name,instansi','diundang')->where('email', session('lpkn_ref_email'))->first();
        $ref_count = ReferrCount::with('user')->orderBy('jumlah', 'desc')->get();
        $pemenang = ReferrCount::with('user')->orderBy('jumlah', 'desc')->limit(3)->get();

        $data = [
            "msg_wa" => "Acara Gratis!\n\n".strtoupper("*Seminar Daring Membangun Ekonomi dan Keuangan Digital Indonesia Tahun 2025*")."\n\n_Segera mendaftar dengan link di bawah ini!_\n\n",
            "msg_twitter" => "Acara Gratis!\n\n".strtoupper("Seminar Daring Membangun Ekonomi dan Keuangan Digital Indonesia Tahun 2025")."\n\nSegera mendaftar dengan link di bawah ini!\n\n",
            "msg_fb" => "Acara Gratis!\n\n".strtoupper("Seminar Daring Membangun Ekonomi dan Keuangan Digital Indonesia Tahun 2025")."\n\nSegera mendaftar dengan link di bawah ini!\n\n",
            "user" => $user,
            "ref_count" => $ref_count,
            "pemenang" => $pemenang
        ];

        return View::make('pages.acara.referral', $data);
    }

    public function terundang()
    {
        $user = User::with('mengundang:ref_by,name,instansi','diundang')->where('email', session('lpkn_ref_email'))->first();

        return response($user['mengundang']);
    }
}
