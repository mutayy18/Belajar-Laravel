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
use App\Gaji;
use App\Dosen;
use App\Mahasiswa;
use App\Wali;
use App\Hobi;

Route::get('relasi-1', function () {
    #temukan mahasiswa dengan nim
    $mahasiswa = Mahasiswa::where('nim','=','18082002')->first();
    #tampilkan nama wali mahasiswa
    return $mahasiswa->wali->nama;
});

Route::get('relasi-2', function () {
    #mencari data mahasiswa dengan nim 18082002
    $mahasiswa = Mahasiswa::where('nim','=','18082002')->first();
    #menampilkan nama dosen pembimbing
    return $mahasiswa->dosen->nama;
});

Route::get('relasi-3', function () {
    #mencari data dosen yang bernama mutiaranurgama
    $dosen = Dosen::where('nama','=','mutiaranurgama')->first();
    #tampilkan seluruh data mahasiswa didiknya
    foreach ($dosen->mahasiswa as $temp){
        echo '<li> Nama : ' . $temp->nama .
        '<strong> ' .$temp->nim . '</strong></li>';
    }
});

Route::get('relasi-4', function () {
    #mencari data mahasiswa yang bernama mutiara
    $sue = Mahasiswa::where('nama','=','mutiara')->first();
    #menampilkan seluruh hobi
    foreach ($sue->hobi as $temp){
        echo '<li>' . $temp->hobi . '</li>';
    }
});

Route::get('relasi-5', function () {
    #mencari data hobi yang bernama mandi hujan
    $mandi_hujan = Hobi::where('hobi', '=' ,'mandi hujan')->first();
    #menampilkan seluruh hobi mahasiswa mandi hujan
    foreach ($mandi_hujan->mahasiswa as $temp){
            echo '<li> Nama : ' . $temp->nama .
            '<strong> ' .$temp->nim. '</strong></li>';
    }
});
Route::get('eloquent', function(){
    $data = Mahasiswa::with('wali','dosen', 'hobi')->get();
    return view('eloquent',compact('data'));
});







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
Route::get('update-buku/{id}/{judul}', 'BukuController@update');

Route::get('hitung-buku', 'BukuController@hitungbuku');

//siswa
Route::get('get-siswa', 'SiswaController@index');
Route::get('create-siswa', 'SiswaController@buat_data');
Route::get('get-siswa/{id}', 'SiswaController@show');
Route::get('delete-siswa/{id}', 'SiswaController@delete');
Route::get('update-siswa/{id}/{nama}', 'SiswaController@update');

//passing data
Route::get('pass', 'PracticeController@pass');
Route::get('pass1', 'PracticeController@pass1');
Route::get('status/{a?}', 'PracticeController@status');
Route::get('buku', 'PracticeController@loop');

//Book
Route::get('book', 'BukuController@index');
Route::get('book/{id}', 'BukuController@show');

//Gaji
Route::get('gajih', 'GajiController@indexgaji');
Route::get('gajih/{id}', 'GajiController@showgaji');

//Belajar Blade  templating
Route::get('/profil',function(){
    return view('profil');
});
Route::get('/kontak',function(){
    return view('kontak');
});
Route::get('/blog',function(){
    return view('blog');
});








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