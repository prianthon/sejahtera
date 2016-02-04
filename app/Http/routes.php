<?php
Route::get('/', function () {
    return view('welcome');
});
//login
Route::group(['middleware' => 'web'], function () {
    Route::auth();
    //page dashboard
    Route::get('dashboard', function () {
        return view('dashboard.index');
    });
    //page nasabah
    Route::post('nasabah/cari','NasabahController@cari');
    Route::post('nasabah/transaksi','NasabahController@transaksi');
    Route::resource('nasabah','NasabahController');
    //page laporan
    Route::get('laporan/pdf','LaporanController@pdf');
});
