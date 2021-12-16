<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

    class SuratController extends Controller
    {
        public function suratMasuk() {
            $inventarisA = DB::table('surat')->where('jenis_surat', 'Surat Personalia')->get()->count();
            $inventarisB1 = DB::table('surat')->where('jenis_surat', 'Surat Keterangan Aktif')->get()->count();
            $inventarisB = DB::table('surat')->where('jenis_surat', 'Surat Keterangan Kegiatan Mahasiswa')->get()->count();
            $inventarisC = DB::table('surat')->where('jenis_surat', 'Surat Undangan')->get()->count();
            $inventarisD = DB::table('surat')->where('jenis_surat', 'Surat Tugas')->get()->count();
            $inventarisE = DB::table('surat')->where('jenis_surat', 'Berita Acara')->get()->count();
            $sm = DB::table('surat')->get(); 
            return view('suratMasuk', compact('inventarisA','inventarisB1','inventarisB','inventarisC','inventarisD','inventarisE'), ['sm' => $sm]);
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

    //cetak 
    public function cetakST02($id){
        $st = DB::table('view_surattugas')->where('id_surat',$id)->get();
        $pdf = \PDF::loadView('cetakSuratTugas', ['st' => $st]);
        return $pdf->stream('Surat Tugas.pdf');
        //return view('cetakSuratTugas', ['st' => $st]);
        }
    public function cetakSP01($id){
            $sp = DB::table('view_suratpersonalia')->where('id_surat',$id)->get();
            $pdf = \PDF::loadView('cetakSuratPersonalia', ['sp' => $sp]);
            return $pdf->stream('SuratPersonalia.pdf');
            // return view('cetakSuratKeputusanDkn', ['sk' => $sk]);
        }
        public function cetakSU03($id){
            $su = DB::table('view_suratundangan')->where('id_surat',$id)->get();
            $pdf = \PDF::loadView('cetakSuratUndangan', ['su' => $su]);
            return $pdf->stream('SuratUndangan.pdf');
            // return view('cetakSuratKeputusanDkn', ['sk' => $sk]);
        }
        public function cetakSuratKKM04($id){
            $kkm = DB::table('view_suratKKM')->where('id_surat',$id)->get();
            $pdf = \PDF::loadView('cetakSuratKKM', ['kkm' => $kkm]);
            return $pdf->stream('SuratKKM.pdf');
            // return view('cetakSuratKeputusanDkn', ['sk' => $sk]);
        }
        public function cetakSuratBA05($id){
            $ba = DB::table('view_beritaAcara')->where('id_surat',$id)->get();
            $pdf = \PDF::loadView('cetakSuratBeritaAcara', ['ba' => $ba]);
            return $pdf->stream('SuratBeritaAcara.pdf');
            // return view('cetakSuratKeputusanDkn', ['sk' => $sk]);
        }
        public function cetakSK06($id){
            $sk = DB::table('view_SK')->where('id_surat',$id)->get();
            $pdf = \PDF::loadView('cetakSK', ['sk' => $sk]);
            return $pdf->stream('SuratKeterangan.pdf');
            //return view('cetakSK', ['sk' => $sk]);
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

