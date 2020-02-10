<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    //
    public function pass(){
        $nama = "Mutiara";
        return view ('latihan', compact('nama'));
    }
    public function pass1(){
        $gaji = 2000000;
        return view('latihan1',['penghasilan'=> $gaji]);
    }
    public function status($status){
        //dd($status); => untuk mengecek isi variable
        return view('latihan2', compact('status'));
   }
   public function loop(){
       $buku = [
           ['judul' => 'Bangkit dari remedial','penerbit' =>
           'erlangga','harga' => 100000,'penulis' => 'Aku yang suka remedial kamu'],
            ['judul' => 'Tips Move on dari kamu','penerbit' =>
           'erlangga','harga' => 150000,'penulis' => 'epul'],
           ['judul' => 'Kekuatan 1/3 malam','penerbit' =>
           'erlangga','harga' => 250000,'penulis' => 'mutiara'],

       ];
       return view('latihan3', compact('buku'));
   }

}
