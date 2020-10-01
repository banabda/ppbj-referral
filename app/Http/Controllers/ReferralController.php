<?php

namespace App\Http\Controllers;

use View;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\Models\User;

class ReferralController extends Controller
{
    public function index()
    {   
        $user = User::with('mengundang:ref_by,name,instansi','diundang')->where('email', 'eriksantiago@gmail.com')->first();

        $data = [
            "msg_wa" => "Acara Gratis!\n\n".strtoupper("*Seminar Daring Membangun Ekonomi dan Keuangan Digital Indonesia Tahun 2025*")."\n\n_Segera mendaftar dengan link di bawah ini!_\n\n",
            "msg_twitter" => "Acara Gratis!\n\n".strtoupper("Seminar Daring Membangun Ekonomi dan Keuangan Digital Indonesia Tahun 2025")."\n\nSegera mendaftar dengan link di bawah ini!\n\n",
            "msg_fb" => "Acara Gratis!\n\n".strtoupper("Seminar Daring Membangun Ekonomi dan Keuangan Digital Indonesia Tahun 2025")."\n\nSegera mendaftar dengan link di bawah ini!\n\n",
            "user" => $user
        ];

        return View::make('pages.acara.referral', $data);
    }

    public function terundang()
    {
        $user = User::with('mengundang:ref_by,name,instansi','diundang')->where('email', 'eriksantiago@gmail.com')->first();

        return response($user['mengundang']);
    }
}
