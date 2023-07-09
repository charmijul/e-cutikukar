<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

//Halaman Login
Route::get('/login', '\App\Http\Controllers\LoginController@index')->name('login');
Route::post('/postlogin', '\App\Http\Controllers\LoginController@postlogin')->name('postlogin');
Route::get('/logout', '\App\Http\Controllers\LoginController@logout')->name('logout');
Route::get('/coba', '\App\Http\Controllers\LoginController@buatUsers');

Route::group(['middleware' => ['auth', 'ceklevel:Admin']], function () {
    //Halaman Home/Dashboard
    Route::get('/home', '\App\Http\Controllers\HomeController@index');
    Route::get('/change-password', '\App\Http\Controllers\UserController@edit');
    Route::post('/change-password', '\App\Http\Controllers\UserController@update');

    //Halaman View Pegawai
    Route::get('/pegawai', '\App\Http\Controllers\pegawaiController@index');
    Route::get('/pegawai/tambah', '\App\Http\Controllers\pegawaiController@tambah');
    Route::post('/pegawai/store', '\App\Http\Controllers\pegawaiController@store');
    Route::get('/pegawai/edit/{id}', '\App\Http\Controllers\pegawaiController@edit');
    Route::put('/pegawai/update/{id}', '\App\Http\Controllers\pegawaiController@update');
    Route::get('/pegawai/hapus/{id}', '\App\Http\Controllers\pegawaiController@delete');
    Route::get('/pegawai/profile/{id}', '\App\Http\Controllers\pegawaiController@profile');
    Route::post('/pegawai/profile/{id}', '\App\Http\Controllers\pegawaiController@profile_foto');

    //Halaman View Mohoncuti
    Route::get('/cuti', '\App\Http\Controllers\MohoncutiController@index');
    Route::get('/cuti/tambah', '\App\Http\Controllers\MohoncutiController@tambah');
    Route::post('/cuti/store', '\App\Http\Controllers\MohoncutiController@store');
    Route::get('/cuti/edit/{id}', '\App\Http\Controllers\MohoncutiController@edit');
    Route::put('/cuti/update/{id}', '\App\Http\Controllers\MohoncutiController@update');
    Route::GET('/cuti/hapus/{id}', '\App\Http\Controllers\MohoncutiController@delete');
    Route::get('/print', '\App\Http\Controllers\MohoncutiController@print');

    // Halaman Cuti Approval
    Route::get('/cuti-approval', '\App\Http\Controllers\MohoncutiController@approval');
    Route::post('/cuti-approval/edit/{id}', '\App\Http\Controllers\MohoncutiController@approvaledit');
    Route::get('/cuti-approval/update/{id}', '\App\Http\Controllers\MohoncutiController@approvalupdate');
    Route::get('/cuti-setuju', '\App\Http\Controllers\MohoncutiController@setuju');
    Route::get('/cuti-ditangguhkan', '\App\Http\Controllers\MohoncutiController@ditangguh');

    //Halaman View Atasan
    Route::get('/atasan', '\App\Http\Controllers\AtasanController@index');
    Route::get('/atasan/tambah', '\App\Http\Controllers\AtasanController@tambah');
    Route::post('/atasan/store', '\App\Http\Controllers\AtasanController@store');
    Route::get('/atasan/edit/{id}', '\App\Http\Controllers\AtasanController@edit');
    Route::put('/atasan/update/{id}', '\App\Http\Controllers\AtasanController@update');
    Route::get('/atasan/hapus/{id}', '\App\Http\Controllers\AtasanController@delete');

    //Halaman View User
    Route::get('/user', '\App\Http\Controllers\UserController@index');
});

Route::group(['middleware' => ['auth', 'ceklevel:Admin,Staff']], function () {
    //Halaman Home/Dashboard
    Route::get('/home', '\App\Http\Controllers\HomeController@index');
    Route::get('/change-password', '\App\Http\Controllers\UserController@edit');
    Route::post('/change-password', '\App\Http\Controllers\UserController@update');

    //Halaman View Pegawai
    Route::get('/pegawai', '\App\Http\Controllers\pegawaiController@index');
    Route::get('/pegawai/tambah', '\App\Http\Controllers\pegawaiController@tambah');
    Route::post('/pegawai/store', '\App\Http\Controllers\pegawaiController@store');
    Route::get('/pegawai/edit/{id}', '\App\Http\Controllers\pegawaiController@edit');
    Route::put('/pegawai/update/{id}', '\App\Http\Controllers\pegawaiController@update');
    Route::get('/pegawai/hapus/{id}', '\App\Http\Controllers\pegawaiController@delete');
    Route::get('/pegawai/profile/{id}', '\App\Http\Controllers\pegawaiController@profile');
    Route::post('/pegawai/profile/{id}', '\App\Http\Controllers\pegawaiController@profile_foto');

    //Halaman View Mohoncuti
    Route::get('/cuti', '\App\Http\Controllers\MohoncutiController@index');
    Route::get('/cuti/tambah', '\App\Http\Controllers\MohoncutiController@tambah');
    Route::post('/cuti/store', '\App\Http\Controllers\MohoncutiController@store');
    Route::get('/cuti/edit/{id}', '\App\Http\Controllers\MohoncutiController@edit');
    Route::put('/cuti/update/{id}', '\App\Http\Controllers\MohoncutiController@update');
    Route::GET('/cuti/hapus/{id}', '\App\Http\Controllers\MohoncutiController@delete');
    Route::get('/print', '\App\Http\Controllers\MohoncutiController@print');

    // Halaman Cuti Approval
    Route::get('/cuti-approval', '\App\Http\Controllers\MohoncutiController@approval');
    Route::post('/cuti-approval/edit/{id}', '\App\Http\Controllers\MohoncutiController@approvaledit');
    Route::get('/cuti-approval/update/{id}', '\App\Http\Controllers\MohoncutiController@approvalupdate');
    Route::get('/cuti-setuju', '\App\Http\Controllers\MohoncutiController@setuju');
    Route::get('/cuti-ditangguhkan', '\App\Http\Controllers\MohoncutiController@ditangguh');

    //Halaman View Atasan
    Route::get('/atasan', '\App\Http\Controllers\AtasanController@index');
    Route::get('/atasan/tambah', '\App\Http\Controllers\AtasanController@tambah');
    Route::post('/atasan/store', '\App\Http\Controllers\AtasanController@store');
    Route::get('/atasan/edit/{id}', '\App\Http\Controllers\AtasanController@edit');
    Route::put('/atasan/update/{id}', '\App\Http\Controllers\AtasanController@update');
    Route::get('/atasan/hapus/{id}', '\App\Http\Controllers\AtasanController@delete');

    //Halaman View User
    Route::get('/user', '\App\Http\Controllers\UserController@index');
});

Route::group(['middleware' => ['auth', 'ceklevel:Admin,Staff,Atasan1,Atasan2,Pegawai,Kepegawaian']], function () {
    //Halaman Home/Dashboard
    Route::get('/home', '\App\Http\Controllers\HomeController@index');
    Route::get('/change-password', '\App\Http\Controllers\UserController@edit');
    Route::post('/change-password', '\App\Http\Controllers\UserController@update');

    //Halaman View Pegawai
    Route::get('/pegawai', '\App\Http\Controllers\pegawaiController@index');
    // Route::get('/pegawai/tambah', '\App\Http\Controllers\pegawaiController@tambah');
    // Route::post('/pegawai/store', '\App\Http\Controllers\pegawaiController@store');
    // Route::get('/pegawai/edit/{id}', '\App\Http\Controllers\pegawaiController@edit');
    // Route::put('/pegawai/update/{id}', '\App\Http\Controllers\pegawaiController@update');
    // Route::get('/pegawai/hapus/{id}', '\App\Http\Controllers\pegawaiController@delete');
    Route::get('/pegawai/profile/{id}', '\App\Http\Controllers\pegawaiController@profile');
    Route::post('/pegawai/profile/{id}', '\App\Http\Controllers\pegawaiController@profile_foto');

    //Halaman View Mohoncuti
    Route::get('/cuti', '\App\Http\Controllers\MohoncutiController@index');
    Route::get('/cuti/tambah', '\App\Http\Controllers\MohoncutiController@tambah');
    Route::post('/cuti/store', '\App\Http\Controllers\MohoncutiController@store');
    Route::get('/cuti/edit/{id}', '\App\Http\Controllers\MohoncutiController@edit');
    Route::put('/cuti/update/{id}', '\App\Http\Controllers\MohoncutiController@update');
    Route::GET('/cuti/hapus/{id}', '\App\Http\Controllers\MohoncutiController@delete');
    Route::get('/cuti/detail/{id}', '\App\Http\Controllers\MohoncutiController@detail');
    Route::get('/print', '\App\Http\Controllers\MohoncutiController@print');

    // Halaman Cuti Approval
    Route::get('/cuti-approval', '\App\Http\Controllers\MohoncutiController@approval');
    Route::post('/cuti-approval/edit/{id}', '\App\Http\Controllers\MohoncutiController@approvaledit');
    Route::get('/cuti-approval/update/{id}', '\App\Http\Controllers\MohoncutiController@approvalupdate');
    Route::get('/cuti-setuju', '\App\Http\Controllers\MohoncutiController@setuju');
    Route::get('/cuti-ditangguhkan', '\App\Http\Controllers\MohoncutiController@ditangguh');

});

Route::group(['middleware' => ['auth', 'ceklevel:Admin,Staff,Atasan1,Atasan2,Pegawai']], function () {
    //Halaman Home/Dashboard
    Route::get('/home', '\App\Http\Controllers\HomeController@index');
    Route::get('/change-password', '\App\Http\Controllers\UserController@edit');
    Route::post('/change-password', '\App\Http\Controllers\UserController@update');

    //Halaman View Pegawai
    // Route::get('/pegawai', '\App\Http\Controllers\pegawaiController@index');
    // Route::get('/pegawai/tambah', '\App\Http\Controllers\pegawaiController@tambah');
    // Route::post('/pegawai/store', '\App\Http\Controllers\pegawaiController@store');
    // Route::get('/pegawai/edit/{id}', '\App\Http\Controllers\pegawaiController@edit');
    // Route::put('/pegawai/update/{id}', '\App\Http\Controllers\pegawaiController@update');
    // Route::get('/pegawai/hapus/{id}', '\App\Http\Controllers\pegawaiController@delete');
    Route::get('/pegawai/profile/{id}', '\App\Http\Controllers\pegawaiController@profile');
    Route::post('/pegawai/profile/{id}', '\App\Http\Controllers\pegawaiController@profile_foto');

    //Halaman View Mohoncuti
    Route::get('/cuti', '\App\Http\Controllers\MohoncutiController@index');
    Route::get('/cuti/tambah', '\App\Http\Controllers\MohoncutiController@tambah');
    Route::post('/cuti/store', '\App\Http\Controllers\MohoncutiController@store');
    Route::get('/cuti/edit/{id}', '\App\Http\Controllers\MohoncutiController@edit');
    Route::put('/cuti/update/{id}', '\App\Http\Controllers\MohoncutiController@update');
    Route::GET('/cuti/hapus/{id}', '\App\Http\Controllers\MohoncutiController@delete');
    Route::get('/print', '\App\Http\Controllers\MohoncutiController@print');
    Route::get('/lampiran/download/{id}', '\App\Http\Controllers\MohoncutiController@download');

    // Halaman Cuti Approval
    Route::get('/cuti-approval', '\App\Http\Controllers\MohoncutiController@approval');
    Route::post('/cuti-approval/edit/{id}', '\App\Http\Controllers\MohoncutiController@approvaledit');
    Route::get('/cuti-approval/update/{id}', '\App\Http\Controllers\MohoncutiController@approvalupdate');
    Route::get('/cuti-setuju', '\App\Http\Controllers\MohoncutiController@setuju');
    Route::get('/cuti-ditangguhkan', '\App\Http\Controllers\MohoncutiController@ditangguh');

});

