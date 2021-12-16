<?php
namespace App\Http\Controllers;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\DB;
    use App\Surat;
	class BuatSuratController extends Controller
	{
	    public function jenisSurat() {
            return view('buatSurat');
           }
        //surat Tugas
        public function buatSuratTugas()
           {
               $st = DB::table('surat')->where('jenis_surat','Surat Tugas')->get();
               return view('buatSuratTugas', ['st' => $st]);
           }
        public function suratTugas(){
            return view('suratTugas');
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

            return redirect('/buatSuratTugas');
        }
        public function viewST($id){
        $st = DB::table('surat')->where('id_surat',$id)->get();
        return view('lihatSuratTugas', ['st' => $st]);
        }
        public function editST($id){
            $st = DB::table('surat')->where('id_surat',$id)->get();
            return view('editST', ['st' => $st]);
            }
            public function updateST(Request $request) {
                DB::table('surat')->where('id_surat', $request->id_surat)->update([
                    'status' => $request -> status,
                    'no_induk' => $request -> no_induk,
                    'name' => $request -> name,
                    'kgt_tugas' => $request -> kgt_tugas,
                    'tema_kgt' => $request -> tema_kgt,
                    'pyng_kgt' => $request -> pyng_kgt,
                    'tgl_laksanakan' => $request -> tgl_laksanakan,
                    'keterangan' => $request -> keterangan,
            ]);
            return redirect('/buatSuratTugas');
        }
        public function deleteST($id) {
            $sk = DB::table('surat')->where('id_surat',$id)->delete();
            return redirect('/buatSuratTugas');
        }
        public function cetakST($id){
            $st = DB::table('view_surattugas')->where('id_surat',$id)->get();
            $pdf = \PDF::loadView('cetakSuratTugas', ['st' => $st]);
            return $pdf->stream('Surat Tugas.pdf');
            //return view('cetakSuratTugas', ['st' => $st]);
            }


        //Surat Personalia/SK
        public function buatSuratPersonalia()
        {
            $sp = DB::table('surat')->where('jenis_surat','Surat Personalia')->get();
            return view('buatSuratPersonalia', ['sp' => $sp]);
        }
        public function suratPersonalia(){
            return view('suratPersonalia');
        }
        public function simpanSP(Request $request){
            DB::table('surat')->insert([
                'id' => $request -> id,
                'jenis_surat' => $request -> jenis_surat,
                'tema_kgt' => $request -> tema_kgt,
                'menetapkan' => $request -> menetapkan,
            ]);

            return redirect('/buatSuratPersonalia');
        }
        public function editSP($id){
            $sp = DB::table('surat')->where('id_surat',$id)->get();
            return view('editSP', ['sp' => $sp]);
            }
            public function updateSP(Request $request) {
                DB::table('surat')->where('id_surat', $request->id_surat)->update([
                    'tema_kgt' => $request -> tema_kgt,
                    'menetapkan' => $request -> menetapkan,
            ]);
            return redirect('/buatSuratPersonalia');
        }
        public function deleteSP($id) {
            $sk = DB::table('surat')->where('id_surat',$id)->delete();
            return redirect('/buatSuratPersonalia');
        }

        public function cetakSP($id){
            $sp = DB::table('view_suratpersonalia')->where('id_surat',$id)->get();
            $pdf = \PDF::loadView('cetakSuratPersonalia', ['sp' => $sp]);
            return $pdf->stream('SuratPersonalia.pdf');
            // return view('cetakSuratKeputusanDkn', ['sk' => $sk]);
        }

        //Surat Undangan
        public function buatSuratUndangan()
        {
            $su = DB::table('surat')->where('jenis_surat','Surat Undangan')->get();
            return view('buatSuratUndangan', ['su' => $su]);
        }

        public function suratUndangan(){
            return view('suratUndangan');
        }

        public function simpanSU(Request $request){
            DB::table('surat')->insert([
                'id' => $request -> id,
                'jenis_surat' => $request -> jenis_surat,
                'hal' => $request -> hal,
                'tgl_surat' => $request -> tgl_surat,
                'kepada' => $request -> kepada,
                'keterangan_surat' => $request -> keterangan_surat,
                'tmpt_kgt' => $request -> tmpt_kgt,
                'waktu_kgt' => $request -> waktu_kgt,
                'tgl_laksanakan' => $request -> tgl_laksanakan,
            ]);

            return redirect('/buatSuratUndangan');
        }

        public function editSU($id){
            $su = DB::table('surat')->where('id_surat',$id)->get();
            return view('editSU', ['su' => $su]);
            }
            public function updateSU(Request $request) {
                DB::table('surat')->where('id_surat', $request->id_surat)->update([
                    'hal' => $request -> hal,
                    'kepada' => $request -> kepada,
                    'keterangan_surat' => $request -> keterangan_surat,
                    'tmpt_kgt' => $request -> tmpt_kgt,
                    'waktu_kgt' => $request -> waktu_kgt,
                    'tgl_laksanakan' => $request -> tgl_laksanakan,
            ]);
            return redirect('/buatSuratUndangan');
        }

        public function deleteSU($id) {
            $sk = DB::table('surat')->where('id_surat',$id)->delete();
            return redirect('/buatSuratUndangan');
        }

        public function cetakSU($id){
            $su = DB::table('view_suratundangan')->where('id_surat',$id)->get();
            $pdf = \PDF::loadView('cetakSuratUndangan', ['su' => $su]);
            return $pdf->stream('SuratUndangan.pdf');
            // return view('cetakSuratKeputusanDkn', ['sk' => $sk]);
        }

        //Surat Keterangan Kegiatan Mahasiswa
        public function buatSuratKKM()
        {
            $kkm = DB::table('surat')->where('jenis_surat','Surat Keterangan Kegiatan Mahasiswa')->get();
            return view('buatSuratKKM', ['kkm' => $kkm]);
        }

        public function suratKKM(){
            return view('suratKKM');
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

            return redirect('/buatSuratKKM');
        }

        public function editKKM($id){
            $kkm = DB::table('surat')->where('id_surat',$id)->get();
            return view('editKKM', ['kkm' => $kkm]);
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
            return redirect('/buatSuratKKM');
        }

        public function deleteKKM($id) {
            $sk = DB::table('surat')->where('id_surat',$id)->delete();
            return redirect('/buatSuratKKM');
        }

        public function cetakSuratKKM($id){
            $kkm = DB::table('view_suratKKM')->where('id_surat',$id)->get();
            $pdf = \PDF::loadView('cetakSuratKKM', ['kkm' => $kkm]);
            return $pdf->stream('SuratKKM.pdf');
            // return view('cetakSuratKeputusanDkn', ['sk' => $sk]);
        }


        //Surat Berita Acara
        public function buatSuratBA()
        {
            $ba = DB::table('surat')->where('jenis_surat','Berita Acara')->get();
            return view('buatSuratBA', ['ba' => $ba]);
        }

        public function beritaAcara(){
            return view('beritaAcara');
        }

        public function simpanSA(Request $request){
            DB::table('surat')->insert([
                'id' => $request -> id,
                'jenis_surat' => $request -> jenis_surat,
                'tema_kgt' => $request -> tema_kgt,
                'kepada' => $request -> kepada,
                'keterangan_surat' => $request -> keterangan_surat,
                'tmpt_kgt' => $request -> tmpt_kgt,
                'tgl_laksanakan' => $request -> tgl_laksanakan,
            ]);

            return redirect('/buatSuratBA');
        }

        public function editBA($id){
            $ba = DB::table('surat')->where('id_surat',$id)->get();
            return view('editBA', ['ba' => $ba]);
            }
            public function updateBA(Request $request) {
                DB::table('surat')->where('id_surat', $request->id_surat)->update([
                    'tema_kgt' => $request -> tema_kgt,
                    'kepada' => $request -> kepada,
                    'keterangan_surat' => $request -> keterangan_surat,
                    'tmpt_kgt' => $request -> tmpt_kgt,
                    'tgl_laksanakan' => $request -> tgl_laksanakan,
            ]);
            return redirect('/buatSuratBA');
        }

        public function deleteBA($id) {
            $sk = DB::table('surat')->where('id_surat',$id)->delete();
            return redirect('/buatSuratBA');
        }

        public function cetakSuratBA($id){
            $ba = DB::table('surat')->where('id_surat',$id)->get();
            $pdf = \PDF::loadView('cetakSuratBeritaAcara', ['ba' => $ba]);
            return $pdf->stream('SuratBeritaAcara.pdf');
            // return view('cetakSuratKeputusanDkn', ['sk' => $sk]);
        }


        //Surat Keterangan Aktif
        public function buatSK()
        {
            $kkm = DB::table('surat')->where('jenis_surat','Surat Keterangan Aktif')->get();
            return view('buatSuratKeterangan', ['kkm' => $kkm]);
        }
        public function SKA(){
            return view('SKA');
        }
        public function simpanSK(Request $request){
            DB::table('surat')->insert([
                'id' => $request -> id,
                'jenis_surat' => $request -> jenis_surat,
                'name' => $request -> name,
                'no_induk' => $request -> no_induk,
                'keterangan_surat' => $request -> keterangan_surat,
            ]);

            return redirect('/buatSuratKeterangan');
        }
        public function editSK($id){
            $sk = DB::table('surat')->where('id_surat',$id)->get();
            return view('editSK', ['sk' => $sk]);
            }
        public function updateSK(Request $request) {
                DB::table('surat')->where('id_surat', $request->id_surat)->update([
                    'name' => $request -> name,
                    'no_induk' => $request -> no_induk,
                    'keterangan_surat' => $request -> keterangan_surat,
            ]);
            return redirect('/buatSuratKeterangan');
        }

        public function deleteSK($id) {
            $sk = DB::table('surat')->where('id_surat',$id)->delete();
            return redirect('/buatSuratKeterangan');
        }
        public function cetakSK($id){
            $sk = DB::table('surat')->where('id_surat',$id)->get();
            $pdf = \PDF::loadView('cetakSK', ['sk' => $sk]);
            return $pdf->stream('SuratKeterangan.pdf');
            //return view('cetakSK', ['sk' => $sk]);
        }
	}
