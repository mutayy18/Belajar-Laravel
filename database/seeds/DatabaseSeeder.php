<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //$this->call(BukuSeeder::class);
        //$this->call(SiswaSeeder::class);
        //$this->call(PembeliSeeder::class);
        //$this->call(PembuatSeeder::class);
        // $this->call(PeminjamSeeder::class);
        // $this->call(PenjualSeeder::class);
       // $this->call(GajiSeeder::class);
        $this->call('RelasiSeeder');
        $this->command->info('RelasiSeeder berhasil.');
    }
}
