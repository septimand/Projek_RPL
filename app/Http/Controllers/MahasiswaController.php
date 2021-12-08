<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function dashboardMahasiswa() {
        $ST = DB::table('surat')->where('jenis_surat', 'Surat Tugas')->get()->count();
        $SKKM = DB::table('surat')->where('jenis_surat', 'Surat Keterangan Kegiatan Mahasiswa')->get()->count();
        return view('dashboardMahasiswa', compact('ST','SKKM'));
       }
}
