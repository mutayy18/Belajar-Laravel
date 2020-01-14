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

        $buku = new Buku;
        $buku->judul = 'belajar laravel';
        $buku->jumlah_halaman = 150;
        $buku->penerbit = 'Grandmedia pustaka';
        $buku->synopsis = 'ini adalah buku tentang laravel...';
        $buku->status = 2;
        $buku->save();

        $buku = new Buku;
        $buku->judul = 'novel';
        $buku->jumlah_halaman = 380;
        $buku->penerbit = 'Grandmedia pustaka';
        $buku->synopsis = 'ini adalah sebuah novel romantis...';
        $buku->status = 3;
        $buku->save();

        $buku = new Buku;
        $buku->judul = 'komik';
        $buku->jumlah_halaman = 50;
        $buku->judul = 'belajar laravel';
        $buku->jumlah_halaman = 150;
        $buku->penerbit = 'Grandmedia pustaka';
        $buku->synopsis = 'ini adalah buku tentang laravel...';
        $buku->status = 2;
        $buku->save();

        $buku = new Buku;
        $buku->judul = 'novel';
        $buku->jumlah_halaman = 380;
        $buku->penerbit = 'Grandmedia pustaka';
        $buku->synopsis = 'ini adalah sebuah novel romantis...';
        $buku->status = 3;
        $buku->save();

        $buku = new Buku;
        $buku->judul = 'komik';
        $buku->jumlah_halaman = 50;
        $buku->penerbit = 'Grandmedia pustaka';
        $buku->synopsis = 'ini adalah sebuah komik hiburan anak remaja...';
        $buku->status = 4;
        $buku->save();

        $buku = new Buku;
        $buku->judul = 'majalah';
        $buku->jumlah_halaman = 30;
        $buku->penerbit = 'Grandmedia pustaka';
        $buku->synopsis = 'ini adalah majalah masak...';
        $buku->status = 5;
        $buku->save();
        


    }
}
