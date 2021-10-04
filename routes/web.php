<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Hallo Pak';
});
Route::get('/rumus-segitiga/{alas}/{tinggi}', function ($alas, $tinggi) {
    $luas = $alas * $tinggi;
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