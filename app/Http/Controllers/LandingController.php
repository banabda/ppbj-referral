<?php

namespace App\Http\Controllers;

use View;
use Session;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\Models\User;

class LandingController extends Controller
{
    public function index(Request $request){

        $params = $request->all();

        $total_user = User::query()->count();

        $data = array(
            'total_user' => $total_user
        );

        if(isset($params['ref'])){
            $data['ref'] = $params['ref'];
        }

        if(session('lpkn_ref_email')){
            $data['user'] = User::with('pembayaran.file')->where('email', session('lpkn_ref_email'))->first();
        }

        return view('pages.landing_page', $data);
    }
    
    public function set_sess(Request $request){
        $data = $request->all();
        
        $validator = Validator::make($data, array(
            'email' => "required"
        ));

        if ($validator->fails()) {
            return response()->json([
                'status'    => "fail",
                'messages' => $validator->errors()->first(),
            ], 422);
        }
        
        $user = User::where('email', $data['email'])->first();
        
        if(!$user){
            return response()->json([
                'status'    => "fail",
                'messages' => "Anda belum terdaftar di sistem kami.",
            ], 422);
        }
        
        Session::put('lpkn_ref_email', $data['email']);
        
        return response()->json([
            'status'    => "ok",
            'messages' => "Redirecting....",
            'route' => route('referral.pendaftaran')
        ], 200);
        
    }
}
