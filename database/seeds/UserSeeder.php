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
            'nama_user' => 'yanita',
            'nomor_induk' => '72180003',
            'password' => bcrypt('fti01'),
            'hak_akses' => 'admin',
            'tgl_lahir' => '2001-05-21',
            'no_hp' => '085278495628',
            'foto_user' => 'yanita.jpg',
            'remember_token' => str::random(30),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

    }
}
