<?php

Route::prefix('admin')->group(function () {
    Route::get('/login', 'Admin\LoginController@index')->name('login.admin');
    Route::post('/login/go', 'Admin\LoginController@login')->name('login.admin.act');
    Route::get('/dashboard', 'Admin\DashboardController@index')->name('admin.dashboard');
    Route::get('/users_affiliasi', 'Admin\DashboardController@users_affiliasi')->name('admin.users_affiliasi');
    Route::get('/detail_user/{id?}', 'Admin\DashboardController@detail_user')->name('admin.detail_user');
    Route::get('/user/export', 'Admin\DashboardController@export')->name('admin.export.user');
    Route::post('/user/import', 'Admin\DashboardController@import_order_online')->name('admin.import.user');
    Route::get('/user/proses/{id?}', 'Admin\DashboardController@proses')->name('admin.proses.pembayaran');
});