<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama_user');
            $table->string('id_user')->unique();
            $table->string('nomor_induk');
            $table->timestamp('nomor_induk_verified_at')->nullable();
            $table->string('password');
            $table->enum('hak_akses', ['admin', 'dosen', 'mahasiswa'])->default('mahasiswa');
            $table->date('tgl_lahir');
            $table->string('no_hp');
            $table->string('foto_user');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
