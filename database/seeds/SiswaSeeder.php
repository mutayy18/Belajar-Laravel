<?php

use App\Siswa;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $siswa = new Siswa;
        $siswa->nama = "mutiara";
        $siswa->nis = '19011997';
        $siswa->kelas = 'XI RPL 3';
        $siswa->jurusan = 'Rekayasa Perangkat Lunak';
        $siswa->alamat = '65,jln Leuwisari V';
        $siswa->tgl_lahir = '2002-08-18';
        $siswa->save();

        $siswa = new Siswa;
        $siswa->nama = "nurfadilah";
        $siswa->nis = '18702002';
        $siswa->kelas = 'XI RPL 3';
        $siswa->jurusan = 'Rekayasa Perangkat Lunak';
        $siswa->alamat = 'jl.nata kusuma VI';
        $siswa->tgl_lahir = '2002-01-07';
        $siswa->save();
    }
}
