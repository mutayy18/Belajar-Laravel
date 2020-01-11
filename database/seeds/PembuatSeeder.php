<?php

use App\Pembuat;
use Illuminate\Database\Seeder;

class PembuatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $pembuat = new Pembuat;
        $pembuat->judul = 'mariposa';
        $pembuat->jumlah_halaman = 340;
        $pembuat->synopsis = 'tentang dia yang membuat saya...';
        $pembuat->tanggal_pembuat = '18-08-2014';
        $pembuat->tanggal_penerbit = '29-12-2015';
        $pembuat->save();

    }
}
