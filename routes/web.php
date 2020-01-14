<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Buku;
Route::get('/', function () {
    return Buku::all(); 
});

Route::get('contoh', 'ContohController@latihan1');

Route::get('profil', 'ContohController@latihan2');

Route::get('profil2', 'ContohController@latihan3');

Route::get('profil3', 'ContohController@latihan4');

Route::get('biodata', 'ContohController@Biodata');

Route::get('musik', 'ContohController@musik');

//menggunakan optional
Route::get('pesan/{makanan?}/{minuman?}/{harga?}', 'ContohController@pesanan');

//crud buku
Route::get('get-buku', 'BukuController@index');
Route::get('create-buku', 'BukuController@buat_data');
Route::get('get-buku/{id}', 'BukuController@show');
Route::get('delete-buku/{id}', 'BukuController@delete');
Route::get('update-buku/{id}', 'BukuController@update');

Route::get('hitung-buku', 'BukuController@hitungbuku');


Route::get('halo', function () {
    return 'hello';
});

Route::get('pesan', function(){
    return 'ini adalah sebuah pesan';
});

Route::get('komentar', function(){
    return 'sebuah halaman komentar';
});

route::get('berita', function(){
    return 'halaman berita masa kini';
});

route::get('pembelajaran', function(){
    return 'pembelajaran laravel';
});

route::get('tv', function(){
    return 'sebuah siaran televisi yang berpendidikan';
});

route::get('variabel', function(){
    $data1 = 'ini variabel data 1';
    $data2 = 'ini variabel data 2';
    $data3 = 'ini variabel data 3';
    $data4 = 'ini variabel data 4';
    $data5 = 'ini variabel data 5';
    return $data1.'<br>'.$data2.'<br>'.$data3.'<br>'.$data4.'<br>'.$data5;
});

route::get('angkot/{jurusan}/{keberangkatan}', function(){
    $jurusan1 = 'cibaduyut - kalapa';
    $jurusan2 = 'ciwastra - cijerah';
    $data = 'angkot jurusan: ';
    return $data.' '.$jurusan1.'<br>'.$jurusan2;
});

route::get('user/{nama}/{alamat}/{nomer}', function($nama,$alamat,$nomer){
    return 'hallo '.$nama. ' yang beralamat di ' .$alamat. ' Nomer '.$nomer;
});

route::get('user/{nama}/{nilai?}', function($nama,$nilai='anda belum mempunyai nilai! <br>'){
    if ($nilai <= 100 && $nilai >= 50){
        echo "Grade A <br>";
    }
    if ($nilai <= 49 && $nilai >= 40){
        echo "Grade B <br>";
    }
    if ($nilai <= 39 && $nilai >= 30){
        echo "Grade C <br>";
    }
    if ($nilai <= 29 && $nilai >= 20){
        echo "Grade D <br>";
    }
    if ($nilai >= 1 && $nilai <= 19){
        echo "Grade E <br>";
    }
    else{
        echo "Dan tidak mendapatkan Grade <br>";
    }

    return 'nama = ' .$nama. "<br>" . 'nilai anda = ' . $nilai;
});