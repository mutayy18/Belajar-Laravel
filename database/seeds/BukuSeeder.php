<?php

use App\Buku;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $buku = new Buku;
        $buku->judul = 'belajar php';
        $buku->jumlah_halaman = 100;
        $buku->penerbit = 'Grandmedia pustaka';
        $buku->synopsis = 'ini adalah buku...';
        $buku->status = 1;
        $buku->save();


    }
}