<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{
    //
    public function index(){
        $siswa = Siswa::all();
        return $siswa;
    }
    public function show($id){
        $siswa = Siswa::find($id);
        return $siswa;
    }
    public function buat_data(){
        $siswa = Siswa::find(2);
        $siswa = new Siswa;
        $siswa->nama = "mutiara";
        $siswa->nis = '19011997';
        $siswa->kelas = 'XI RPL 3';
        $siswa->jurusan = 'Rekayasa Perangkat Lunak';
        $siswa->alamat = '65,jln Leuwisari V';
        $siswa->tgl_lahir = '2002-08-18';
        $siswa->save();
        return $siswa;
    }
    public function update($id,$nama){
        $siswa = Siswa::find($id);
        $siswa->nama = $nama;
        $siswa->nis = '18702002';
        $siswa->kelas = 'XI RPL 3';
        $siswa->jurusan = 'Rekayasa Perangkat Lunak';
        $siswa->alamat = 'jl.nata kusuma VI';
        $siswa->tgl_lahir = '2002-01-07';
        $siswa->save();
        return $siswa;
    }
    public function delete($id){
        $siswa = Siswa::find($id);
        $siswa->delete();
        return $siswa;
    }

}
