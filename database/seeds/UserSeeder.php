<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nama_user' => 'Herling Yan Bridny Kalangi',
            'id_user' => '72190307',
            'nomor_induk' => '72190307',
            'password' => bcrypt('fti03'),
            'hak_akses' => 'Mahasiswa',
            'email' => 'erling.bridny@si.ukdw.ac.id',
            'tgl_lahir' => '2001-09-21',
            'no_hp' => '085123780921',
            'foto_user' => 'bridny.jpg',
            'remember_token' => str::random(30),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

    }
}
