<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContohController extends Controller
{
    //
    public function latihan1(){
        return 'ini contoh controller';
    }
    public function latihan2(){
        $a = 'mutiara';
        $b = 'Nurgama';

        return 'Nama saya adalah '.$a.' '.$b;
    }
    //pasing data from controller to view
    public function latihan3(){
        $a = 'mutiara';

        return View('test',compact('a'));
    }
    public function latihan4(){
        $a = 'muti';
        return View('test2',['nama' => $a]);

    }
    public function Biodata(){
        $nama = "Mutiara Nurgama";
        $agama = "Islam";
        $jengkel = "Perempuan";
        $alamat = "65, jln Leuwisari V ";
        $sekolah = "Smk Assaalam Bandung";
        $kelas = "XI RPL 3";
        $jurusan = "Rekayasa Perangkat Lunak";
        $hobi = "membaca";
        $umur = "17 tahun";
        return View('test3',['nama' => $nama,'agama' => $agama,'jengkel' => $jengkel,
        'alamat' => $alamat,'sekolah' => $sekolah,'kelas' => $kelas,
        'jurusan' => $jurusan,'hobi' => $hobi,'umur' => $umur]);

    }
    public function pesanan($a = null, $b = null, $c =null){
        if (isset($a)) {
            $a = "Anda memesan $a";
        }
         if (isset($b)) {
             $b = " & $b";
         }
         if (isset($c)) {
          if (($c) >= 25000 ) {
              $c = "Mendapatkan ukuran large";
         }
          elseif (($c) <= 25000 && ($c) >= 15000) {
             $c = "Mendapatkan ukuran medium";
         }
          elseif (($c) <= 15000 && ($c) >= 10000) {
             $c = "Mendapatkan ukuran small";
         }
         else {
             $c = "Harga anda tidak valid";
         }    
    } 
         if (!isset($a)) {
            $a = "Anda belum memesan sesuatu";
        }
        return View('pesan',compact('a','b','c'));
    }

}
