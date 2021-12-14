<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DosenController extends Controller
{
    public function dashboardDosen() {
        $ST = DB::table('surat')->where('jenis_surat', 'Surat Tugas')->get()->count();
        $SK = DB::table('surat')->where('jenis_surat', 'Surat Keterangan Aktif')->get()->count();
        return view('dashboardDosen', compact('ST','SK'));
       }
}
