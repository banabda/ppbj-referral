<?php
    use App\Models\User;

    Route::get('/', 'LandingController@index')->name('landing');
    Route::post('/referral/set/sess', 'LandingController@set_sess')->name('referral.set.sess');

    Route::get('/referral/peserta', 'ReferralController@index')->name('referral.pendaftaran');
    Route::get('/referral/terundang', 'ReferralController@terundang')->name('referral.terundang');
    Route::get('/download_brosur', 'ReferralController@download_brosur')->name('download.brosur');
    Route::get('/acara/pendaftaran', 'Acara\RegisterController@index')->name('acara.pendaftaran');
    Route::post('/acara/pendaftaran', 'Acara\RegisterController@store')->name('acara.daftar');
    Route::post('/acara/pembayaran', 'Acara\RegisterController@update')->name('acara.pembayaran');

    Route::get('/email/daftar/view', function(){
        $user = User::where('email', 'ferdians.bm@gmail.com')->first();
        
        $harga = 245000;
        $user->total_harga = (int) $harga + $user->id;
        
        return view('email.template', $user);
    });

    require 'auth/index.php';
    require 'admin/index.php';
