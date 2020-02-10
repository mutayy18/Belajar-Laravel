<?php

use Illuminate\Database\Seeder;
use App\Dosen;
use App\Wali;
use App\Mahasiswa;
use App\Hobi;

class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('mahasiswas')->delete();
        DB::table('walis')->delete();
        DB::table('dosens')->delete();
        DB::table('hobis')->delete();
        DB::table('mahasiswa_hobi')->delete();
        
        #membuat data dosen
        $dosen = Dosen::create(array(
            'nama' => 'mutiaranurgama',
            'nipd' => '18082982'
        ));
        $this->command->info('Data dosen telah di isi');

        #membuat data mahasiswa
        $sue = Mahasiswa::create(array(
            'nama' => 'mutiara',
            'nim' => '18082002',
            'id_dosen' =>$dosen->id
        ));

        $dije = Mahasiswa::create(array(
            'nama' => 'didil',
            'nim' => '9876543',
            'id_dosen' =>$dosen->id
        ));
        
        $sha = Mahasiswa::create(array(
            'nama' => 'rofi',
            'nim' => '1029198',
            'id_dosen' =>$dosen->id
        ));
        $this->command->info('Data mahasiswa telah di isi');

        #membuat wali zubaedah
        Wali::create(array(
            'nama' => 'Zubaedah',
            'id_mahasiswa' => $sue->id
        ));
        #membuat wali zuhe
        Wali::create(array(
            'nama' => 'Zuhe',
            'id_mahasiswa' => $dije->id
        ));
        #membuat wali mahmud
        wali::create(array(
            'nama' => 'mahmud',
            'id_mahasiswa' => $sha->id
        ));
        #informasi ketika semua wali telah di isi
    $this->command->info('data mahasiswa dan wali telah di isi');

    #membuat data tabel hobi
    $mandi_hujan = Hobi::create(array(
        'hobi' => 'Mandi hujan'
    ));
    $baca_buku = Hobi::create(array(
        'hobi' => 'Baca buku'   
    ));
    $sue->hobi()->attach($mandi_hujan->id);
    $sue->hobi()->attach($baca_buku->id);
    $dije->hobi()->attach($mandi_hujan->id);
    $sha->hobi()->attach($baca_buku->id);
    $this->command->info('data mahasiswa dan hobi telah di isi');

   }
}
