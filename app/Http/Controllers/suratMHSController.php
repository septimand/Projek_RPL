<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SuratMHSController extends Controller{


    public function suratMasuk() {
            $sm = DB::table('surat')->where('status','Disetujui')->get();
            return view('suratMasukMHS', ['sm' => $sm]);
    }
    public function suratKeluar() {
        $sk = DB::table('surat')
        ->where('status',null)
        ->orWhere('status','Ditolak')
        ->get();
        return view('suratKeluarMHS', ['sk' => $sk]);
    }
    public function cetakST($id){
        $st = DB::table('view_surattugas')->where('id_surat',$id)->get();
        $pdf = \PDF::loadView('cetakSuratTugas', ['st' => $st]);
        return $pdf->stream('Surat Tugas.pdf');
        //return view('cetakSuratTugas', ['st' => $st]);
        }
    public function arsipSurat() {
        $as = DB::table('surat')
        ->where('status','Disetujui')
        ->get();
         return view('arsipSuratMHS', ['as' => $as]);
     }
     public function cetakSuratKKM($id){
        $kkm = DB::table('view_suratkkm')->where('id_surat',$id)->get();
        $pdf = \PDF::loadView('cetakSuratKKM', ['kkm' => $kkm]);
        return $pdf->stream('SuratKKM.pdf');
        // return view('cetakSuratKeputusanDkn', ['sk' => $sk]);
    }

}
