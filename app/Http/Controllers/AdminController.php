<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboardAdmin() {
        $ST = DB::table('surat')->where('jenis_surat', 'Surat Tugas')->get()->count();
        $SKA = DB::table('surat')
        ->where('jenis_surat', 'Surat Keterangan Aktif')
        ->get()->count();
        $SP = DB::table('surat')->where('jenis_surat', 'Surat Personalia')->get()->count();
        $SKKM = DB::table('surat')->where('jenis_surat', 'Surat Keterangan Kegiatan Mahasiswa')->get()->count();
        $BA = DB::table('surat')->where('jenis_surat', 'Berita Acara')->get()->count();
        $SU = DB::table('surat')->where('jenis_surat', 'Surat Undangan')->get()->count();
        return view('dashboardAdmin',compact('ST','SKA','SP','SKKM','BA','SU'));
       }
}
