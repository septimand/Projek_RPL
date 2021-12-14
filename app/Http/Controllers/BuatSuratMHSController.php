<?php
namespace App\Http\Controllers;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\DB;
    use App\Surat;
	class BuatSuratMHSController extends Controller
	{
        public function buatSuratTugas()
        {
            $st = DB::table('surat')->where('jenis_surat','Surat Tugas')->get();
            return view('buatSuratTugasMHS', ['st' => $st]);
        }
        public function suratTugas(){
         return view('suratTugasMHS');
     }
     public function simpanST(Request $request){
        // $data = $request->all();
        // //dd($data);
        // $surat = new Surat;
        // $surat->id = $data['id'];
        // $surat->jenis_surat = $data['jenis_surat'];
        // $surat->no_induk = $data['no_induk'];
        // $surat->name = $data['name'];
        // $surat->kgt_tugas = $data['kgt_tugas'];
        // $surat->tema_kgt = $data['tema_kgt'];
        // $surat->pyng_kgt = $data['pyng_kgt'];
        // $surat->tgl_laksanakan = $data['tgl_laksanakan'];
        // $surat->save();
        DB::table('surat')->insert([
            'id' => $request -> id,
            'jenis_surat' => $request -> jenis_surat,
            'no_induk' => $request -> no_induk,
            'name' => $request -> name,
            'kgt_tugas' => $request -> kgt_tugas,
            'tema_kgt' => $request -> tema_kgt,
            'pyng_kgt' => $request -> pyng_kgt,
            'tgl_laksanakan' => $request -> tgl_laksanakan,
        ]);

        return redirect('/buatSuratTugasMHS');
    }
    public function viewST($id){
        $st = DB::table('surat')->where('id_surat',$id)->get();
        return view('lihatSuratTugasMHS', ['st' => $st]);
        }
        public function editST($id){
            $st = DB::table('surat')->where('id_surat',$id)->get();
            return view('editSTMHS', ['st' => $st]);
            }
            public function updateST(Request $request) {
                DB::table('surat')->where('id_surat', $request->id_surat)->update([
                    'status' => $request -> status,
                    'keterangan' => $request -> keterangan,
                    'no_induk' => $request -> no_induk,
                    'name' => $request -> name,
                    'kgt_tugas' => $request -> kgt_tugas,
                    'tema_kgt' => $request -> tema_kgt,
                    'pyng_kgt' => $request -> pyng_kgt,
                    'tgl_laksanakan' => $request -> tgl_laksanakan,
            ]);
            return redirect('/buatSuratTugasMHS');
        }
        public function deleteST($id) {
            $sk = DB::table('surat')->where('id_surat',$id)->delete();
            return redirect('/buatSuratTugasMHS');
        }
        public function cetakST($id){
            $sk = DB::table('surat')->where('id_surat',$id)->get();
            $pdf = \PDF::loadView('cetakSuratTugas', ['sk' => $sk]);
            return $pdf->stream('Surat Tugas.pdf');
            }
            
        //Surat Keterangan Kegiatan Mahasiswa
        public function buatSuratKKM()
        {
            $kkm = DB::table('surat')->where('jenis_surat','Surat Keterangan Kegiatan Mahasiswa')->get();
            return view('buatSuratKKMMHS', ['kkm' => $kkm]);
        }
        public function suratKKM(){
            return view('suratKKMMHS');
        }
        public function simpanSKKM(Request $request){
            DB::table('surat')->insert([
                'id' => $request -> id,
                'jenis_surat' => $request -> jenis_surat,
                'hal' => $request -> hal,
                'kepada' => $request -> kepada,
                'keterangan_surat' => $request -> keterangan_surat,
                'tmpt_kgt' => $request -> tmpt_kgt,
                'waktu_kgt' => $request -> waktu_kgt,
                'tgl_laksanakan' => $request -> tgl_laksanakan,
            ]);

            return redirect('/buatSuratKKMMHS');
        }
        public function editKKM($id){
            $kkm = DB::table('surat')->where('id_surat',$id)->get();
            return view('editKKMMHS', ['kkm' => $kkm]);
            }
            public function updateKKM(Request $request) {
                DB::table('surat')->where('id_surat', $request->id_surat)->update([
                    'hal' => $request -> hal,
                    'kepada' => $request -> kepada,
                    'keterangan_surat' => $request -> keterangan_surat,
                    'tmpt_kgt' => $request -> tmpt_kgt,
                    'waktu_kgt' => $request -> waktu_kgt,
                    'tgl_laksanakan' => $request -> tgl_laksanakan,
            ]);
            return redirect('/buatSuratKKMMHS');
        }
        public function deleteKKM($id) {
            $sk = DB::table('surat')->where('id_surat',$id)->delete();
            return redirect('/buatSuratKKMMHS');
        }

        public function cetakSuratKKM($id){
            $kkm = DB::table('surat')->where('id_surat',$id)->get();
            $pdf = \PDF::loadView('cetakSuratKKM', ['kkm' => $kkm]);
            return $pdf->stream('SuratKKM.pdf');
            // return view('cetakSuratKeputusanDkn', ['sk' => $sk]);
        }
    }
