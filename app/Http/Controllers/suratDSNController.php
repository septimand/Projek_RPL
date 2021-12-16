<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SuratDSNController extends Controller{

    public function suratMasuk() {
        $sm = DB::table('surat')->where('status','Disetujui')
            ->get();
        return view('suratMasukDSN', ['sm' => $sm]);
    }
    public function cetakST($id){
        $st = DB::table('view_surattugas')->where('id_surat',$id)->get();
        $pdf = \PDF::loadView('cetakSuratTugas', ['st' => $st]);
        return $pdf->stream('Surat Tugas.pdf');
        //return view('cetakSuratTugas', ['st' => $st]);
        }
    public function cetakSK($id){
            $sk = DB::table('view_SK')->where('id_surat',$id)->get();
            $pdf = \PDF::loadView('cetakSK', ['sk' => $sk]);
            return $pdf->stream('SuratKeterangan.pdf');
            //return view('cetakSK', ['sk' => $sk]);
        }
    public function suratKeluar() {
        $sk = DB::table('surat')->where('status',null)
        ->orWhere('status','Ditolak')
        ->get();
        return view('suratKeluarDSN', ['sk' => $sk]);
    }

    public function arsipSurat() {
        $as = DB::table('surat')->where('status','Disetujui')->get();
        return view('arsipSuratDSN', ['as' => $as]);
    }


}
