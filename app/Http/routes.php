<?php
Route::get('/', function () {
    return view('welcome');
});
//login
Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('dashboard', function () {
        return view('dashboard.index');
    });
    Route::post('nasabah/cari','NasabahController@cari');
    Route::resource('nasabah','NasabahController');
});
