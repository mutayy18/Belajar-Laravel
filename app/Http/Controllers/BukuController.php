<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;

class BukuController extends Controller
{
    //
    public function index(){
        $buku = Buku::all();
        return view('buku.index',compact('buku'));
    }
    public function show($id){
        $buku = Buku::find($id);
        return view('buku.show',compact('buku'));
    }
    public function hitungbuku(){
        $buku = Buku::count();
        return $buku;
    }
    public function buat_data(){
        $buku = Buku::find(2);
        $buku = new Buku;
        $buku->judul = "Belajar membaca";
        $buku->jumlah_halaman = 200;
        $buku->penerbit = 'Grandmedia pustaka';
        $buku->synopsis = 'membaca akan mendapat kan ilmu';
        $buku->status =2;
        $buku->save();
        return $buku;
    }
    public function update($id, $judul){
        $buku = Buku::find($id);
        $buku->judul = $judul;
        $buku->jumlah_halaman = 2000;
        $buku->penerbit = 'CV lorem inpum';
        $buku->synopsis = 'lorem inpum';
        $buku->status =false;
        $buku->save();
        return $buku;
    }
    public function delete($id){
        $buku = Buku::find($id);
        $buku->delete();
        return $buku;
    }

}
