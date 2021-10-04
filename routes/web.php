<?php

use Illuminate\Support\Facades\Route;

Route::get('/s', function () {
    return 'Hallo Pak';
});
Route::get('/rumus-segitiga/{alas}/{tinggi}', function ($alas, $tinggi) {
    return 'Alasnya :'.$alas. "<br>"
            .'Tingginya : ' . $tinggi;
});
Route::get('/codeigniter', function () {
    return 'Hallo codeigniter';
});
Route::get('/nama-saya-adalah-{nama?}', function ($nama = 'Wajib diisi') {
    return 'Nama Saya Adalah : '.$nama;
});
Route::get('/nama-framework/{nama}/{tahun}', function ($nama, $tahun) {
    return 'Nama Framework yang digunakan adalah : '.$nama ."<br>". 
    "Tahun Rilis : ".$tahun;
});

Route::group(['prefix'=>'Jurusan'], function () {
    Route::get('/', function() {
        return 'Berhasil';
    });
    Route::get('/kelas/{namakelas}', function ($namakelas) {
        return $namakelas;
    });
    Route::get('/wali-kelas/{nama}', function ($nama) {
        return $nama;
    });
});