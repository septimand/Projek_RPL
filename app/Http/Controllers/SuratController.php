<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

    class SuratController extends Controller
    {
        public function suratMasuk() {
            $inventarisA = DB::table('surat')->where('jenis_surat', 'Surat Personalia')->get()->count();
            $inventarisB = DB::table('surat')->where('jenis_surat', 'Surat Keterangan Kegiatan Mahasiswa')->get()->count();
            $inventarisC = DB::table('surat')->where('jenis_surat', 'Surat Undangan')->get()->count();
            $inventarisD = DB::table('surat')->where('jenis_surat', 'Surat Tugas')->get()->count();
            $inventarisE = DB::table('surat')->where('jenis_surat', 'Berita Acara')->get()->count();
            $sm = DB::table('surat')->get(); 
            return view('suratMasuk', compact('inventarisA','inventarisB','inventarisC','inventarisD','inventarisE'), ['sm' => $sm]);
    }
    public function simpan(Request $request){
        DB::table('surat')->where('id_surat', $request->id_surat)->update([
            'status' => $request -> status,
        ]);

        return redirect('suratMasuk');
    }
    public function ttd(Request $request){
        DB::table('surat')->where('id_surat', $request->id_surat)->update([
            'no_surat' => $request -> no_surat,
            'tanggal_masuk' => $request -> tanggal_masuk,
            'id_pejabat' => $request -> id_pejabat,
        ]);
        return redirect('suratMasuk');
    }
    public function ketSimpan(Request $request){
        DB::table('surat')->where('id_surat', $request->id_surat)->update([
            'keterangan' => $request -> keterangan,
        ]);

        return redirect('suratMasuk');
    }


//surat keluar
    public function suratKeluar() {
        $sk = DB::table('surat')
        ->where('status',null)
        ->orWhere('status','Ditolak')
        ->get();
        return view('suratKeluar', ['sk' => $sk]);
    }
    
    

//arsipSurat
 public function arsipSurat() {
    $as = DB::table('surat')->where('status','Disetujui')->get();
     return view('arsipSurat', ['as' => $as]);
 }
}

