<?php

use App\Pembeli;
use Illuminate\Database\Seeder;

class PembeliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $pembeli = new Pembeli;
        $pembeli->jumlah_barang = 2;
        $pembeli->judul = 'buku';
        $pembeli->synopsis = "buku jendela dunia...";
        $pembeli->tanggal_pembelian = '20-01-2020';
        $pembeli->harga = 120000;
        $pembeli->save();

    }
}
