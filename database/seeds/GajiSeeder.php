<?php

use App\Gaji;
use Illuminate\Database\Seeder;

class GajiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $gaji = new Gaji;
        $gaji->nip = '1808002';
        $gaji->nama = 'Mutiara';
        $gaji->agama = 'Islam';
        $gaji->jenis_kelamin = 'Perempuan';
        $gaji->alamat = 'Jln.leuwisari V';
        $gaji->jabatan = 'Manager';
        $gaji->jam_kerja= 250;
        $gaji->save();

        $gaji = new Gaji;
        $gaji->nip = '2102003';
        $gaji->nama = 'Rofi fadillah';
        $gaji->agama = 'Islam';
        $gaji->jenis_kelamin = 'Perempuan';
        $gaji->alamat = 'Kp.pasawahan';
        $gaji->jabatan = 'Staff';
        $gaji->jam_kerja= 200;
        $gaji->save();

        $gaji = new Gaji;
        $gaji->nip = '2102004';
        $gaji->nama = 'Daw';
        $gaji->agama = 'Islam';
        $gaji->jenis_kelamin = 'Perempuan';
        $gaji->alamat = 'Kp.pasawahan';
        $gaji->jabatan = 'Staff';
        $gaji->jam_kerja= 150;
        $gaji->save();
      
    }
}
