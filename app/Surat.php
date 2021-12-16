<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    protected $table = "surat";
    protected $fillable  = [
        'jenis_surat', 'tanggal_masuk', 'keterangan', 'status', 'id_surat', 'id_pejabat', 'no_induk', 'id', 'name', 'kgt_tugas', 'tema_kgt', 'pyng_kgt', 'hari_kgt', 'tgl_laksanakan', 'menetapkan', 'hal', 'kepada', 'keterangan_surat', 'tmpt_kgt', 'waktu_kgt', 'no_surat', 'tgl_surat','menimbang', 'mengingat','created_at','updated_at','deleted_at',
    ];
    protected $casts = [
        'no_induk' => 'array',
        'name' => 'array',
        'menimbang' => 'array',
        'mengingat' => 'array',
        'menetapkan' => 'array',
    ];
}
