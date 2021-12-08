<?php
namespace App\Http\Controllers;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\DB;
    use App\Surat;
	class BuatSuratDSNController extends Controller{

        //surat Tugas
        public function buatSuratTugas()
           {
               $st = DB::table('surat')->where('jenis_surat','Surat Tugas')->get();
               return view('buatSuratTugasDSN', ['st' => $st]);
           }
           public function suratTugas(){
            return view('suratTugasDSN');
        }
        public function simpanST(Request $request){
            $data = $request->all();
            //dd($data);
            $surat = new Surat;
            $surat->id = $data['id'];
            $surat->jenis_surat = $data['jenis_surat'];
            $surat->no_induk = $data['no_induk'];
            $surat->name = $data['name'];
            $surat->kgt_tugas = $data['kgt_tugas'];
            $surat->tema_kgt = $data['tema_kgt'];
            $surat->pyng_kgt = $data['pyng_kgt'];
            $surat->tgl_laksanakan = $data['tgl_laksanakan'];
            $surat->save();
            // DB::table('surat')->insert([                
            //     'id' => $request -> id,
            //     'jenis_surat' => $request -> jenis_surat,
            //     'no_induk' => $request -> no_induk,
            //     'name' => $request -> name,
            //     'kgt_tugas' => $request -> kgt_tugas,
            //     'tema_kgt' => $request -> tema_kgt,
            //     'pyng_kgt' => $request -> pyng_kgt,
            //     'tgl_laksanakan' => $request -> tgl_laksanakan,
            // ]);

            return redirect('/buatSuratTugasDSN');
        }
        public function viewST($id){
            $st = DB::table('surat')->where('id_surat',$id)->get();
            return view('lihatSuratTugasDSN', ['st' => $st]);
            }
            public function editST($id){
                $st = DB::table('surat')->where('id_surat',$id)->get();
                return view('editSTDSN', ['st' => $st]);
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
                return redirect('/buatSuratTugasDSN');
            }
            public function deleteST($id) {
                $sk = DB::table('surat')->where('id_surat',$id)->delete();
                return redirect('/buatSuratTugasDSN');
            }
            public function cetakST($id){
                $sk = DB::table('surat')->where('id_surat',$id)->get();
                $pdf = \PDF::loadView('cetakSuratTugas', ['sk' => $sk]);
                return $pdf->stream('Surat Tugas.pdf');
                }

        //Surat Personalia/SK
        public function buatSuratPersonalia()
        {
            $sp = DB::table('surat')->where('jenis_surat','Surat Personalia')->get();
            return view('buatSuratPersonaliaDSN', ['sp' => $sp]);
        }
        public function suratPersonalia(){
            return view('suratPersonaliaDSN');
        }
        public function simpanSP(Request $request){
            DB::table('surat')->insert([                
                'id' => $request -> id,
                'jenis_surat' => $request -> jenis_surat,
                'tema_kgt' => $request -> tema_kgt,
                'menetapkan' => $request -> menetapkan,
            ]);

            return redirect('/buatSuratPersonaliaDSN');
        }
        public function editSP($id){
            $sp = DB::table('surat')->where('id_surat',$id)->get();
            return view('editSPDSN', ['sp' => $sp]);
            }
            public function updateSP(Request $request) {
                DB::table('surat')->where('id_surat', $request->id_surat)->update([
                    'tema_kgt' => $request -> tema_kgt,
                    'menetapkan' => $request -> menetapkan,
            ]);
            return redirect('/buatSuratPersonaliaDSN');
        }
        public function deleteSP($id) {
            $sk = DB::table('surat')->where('id_surat',$id)->delete();
            return redirect('/buatSuratPersonaliaDSN');
        }

        public function cetakSP($id){
            $sp = DB::table('surat')->where('id_surat',$id)->get();
            $pdf = \PDF::loadView('cetakSuratPersonalia', ['sp' => $sp]);
            return $pdf->stream('SuratPersonalia.pdf');
            // return view('cetakSuratKeputusanDkn', ['sk' => $sk]);
        }

    }
