<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('petugas')->insert([
            'nama_petugas' => 'admin',
            'username' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'telp' => '085312349876',
            'foto' => 'null'
        ]);
    }
}
