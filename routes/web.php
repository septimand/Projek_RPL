<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Login
Route::get('/dashboardAdmin', 'AdminController@dashboardAdmin');
Route::get('/dashboardDosen', 'DosenController@dashboardDosen');
Route::get('/dashboardMahasiswa', 'MahasiswaController@dashboardMahasiswa');
Route::get('/logout', 'LoginController@logout');
//Routing Hak_akses
Route::get('admin', function () { return view('dashboardAdmin'); })->middleware('checkRole:admin');
Route::get('dosen', function () { return view('dashboardDosen'); })->middleware(['checkRole:dosen,admin']);
Route::get('mahasiswa', function () { return view('dashboardMahasiswa'); })->middleware(['checkRole:mahasiswa,admin']);

//buat surat
Route::get('/buatSurat', 'BuatSuratController@jenisSurat');
//suratTugas
Route::get('/buatSuratTugas', 'BuatSuratController@buatSuratTugas');
Route::get('/buatSuratTugas/suratTugas', 'BuatSuratController@suratTugas');
Route::post('/buatSurat/simpanST', 'BuatSuratController@simpanST');
Route::get('/buatSuratTugas/lihatSuratTugas/{id}', 'BuatSuratController@viewST');
Route::get('/buatSuratTugas/editST/{id}', 'BuatSuratController@editST');
Route::post('/buatSuratTugas/updateST','BuatSuratController@updateST');
Route::get('/buatSuratTugas/deleteST/{id}','BuatSuratController@deleteST');
Route::get('/buatSuratTugas/cetakST/{id}', 'BuatSuratController@cetakST');

//suratPersonalia
Route::get('/buatSuratPersonalia', 'BuatSuratController@buatSuratPersonalia');
Route::get('/buatSuratPersonalia/suratPersonalia', 'BuatSuratController@suratPersonalia');
Route::post('/buatSurat/simpanSP', 'BuatSuratController@simpanSP');
Route::get('/buatSuratPersonalia/editSP/{id}', 'BuatSuratController@editSP');
Route::post('/buatSuratPersonalia/updateSP','BuatSuratController@updateSP');
Route::get('/buatSuratPersonalia/deleteSP/{id}','BuatSuratController@deleteSP');
Route::get('/buatSuratPersonalia/cetakSP/{id}', 'BuatSuratController@cetakSP');

//suratUndangan
Route::get('/buatSuratUndangan', 'BuatSuratController@buatSuratUndangan');
Route::get('/buatSuratUndangan/suratUndangan', 'BuatSuratController@suratUndangan');
Route::post('/buatSurat/simpanSU', 'BuatSuratController@simpanSU');
Route::get('/buatSuratUndangan/editSU/{id}', 'BuatSuratController@editSU');
Route::post('/buatSuratUndangan/updateSU','BuatSuratController@updateSU');
Route::get('/buatSuratUndangan/deleteSU/{id}','BuatSuratController@deleteSU');
Route::get('/buatSuratUndangan/cetakSU/{id}', 'BuatSuratController@cetakSU');

//SuratKeteranganKegiatanMahasiswa
Route::get('/buatSuratKKM', 'BuatSuratController@buatSuratKKM');
Route::get('/buatSuratKKM/suratKKM', 'BuatSuratController@suratKKM');
Route::post('/buatSurat/simpanSKKM', 'BuatSuratController@simpanSKKM');
Route::get('/buatSuratKKM/editKKM/{id}', 'BuatSuratController@editKKM');
Route::post('/buatSuratKKM/updateKKM','BuatSuratController@updateKKM');
Route::get('/buatSuratKKM/deleteKKM/{id}','BuatSuratController@deleteKKM');
Route::get('/buatSuratKKM/cetakSuratKKM/{id}', 'BuatSuratController@cetakSuratKKM');

//surat Berita Acara
Route::get('/buatSuratBA', 'BuatSuratController@buatSuratBA');
Route::get('/buatSuratBA/beritaAcara', 'BuatSuratController@beritaAcara');
Route::post('/buatSurat/simpanSA', 'BuatSuratController@simpanSA');
Route::get('/buatSuratBA/editBA/{id}', 'BuatSuratController@editBA');
Route::post('/buatSuratBA/updateBA','BuatSuratController@updateBA');
Route::get('/buatSuratBA/deleteBA/{id}','BuatSuratController@deleteBA');
Route::get('/buatSuratBA/cetakSuratBA/{id}', 'BuatSuratController@cetakSuratBA');

//suratmasuk
Route::get('/suratMasuk', 'SuratController@suratMasuk');
Route::post('/suratMasuk/simpan', 'SuratController@simpan');
Route::post('/suratMasuk/simpanTTD', 'SuratController@ttd');
Route::post('/suratMasuk/keterangan', 'SuratController@ketSimpan');

//suratkeluar
Route::get('/suratKeluar', 'SuratController@suratKeluar');

//arsipsurat
Route::get('/arsipSurat', 'SuratController@arsipSurat');

//mahasiswa
//suratTugas
Route::get('/buatSuratTugasMHS', 'BuatSuratMHSController@buatSuratTugas');
Route::get('/buatSuratTugasMHS/suratTugasMHS', 'BuatSuratMHSController@SuratTugas');
Route::post('/buatSuratMHS/simpanST', 'BuatSuratMHSController@simpanST');
Route::get('/buatSuratTugasMHS/lihatSuratTugasMHS/{id}', 'BuatSuratMHSController@viewST');
Route::get('/buatSuratTugasMHS/editSTMHS/{id}', 'BuatSuratMHSController@editST');
Route::post('/buatSuratTugasMHS/updateST','BuatSuratMHSController@updateST');
Route::get('/buatSuratTugasMHS/deleteST/{id}','BuatSuratMHSController@deleteST');
Route::get('/buatSuratTugasMHS/cetakST/{id}', 'BuatSuratController@cetakST');
Route::get('/buatSuratTugasMHS/cetakST/{id}', 'BuatSuratMHSController@cetakST');

//SuratKeteranganKegiatanMahasiswa
Route::get('/buatSuratKKMMHS', 'BuatSuratMHSController@buatSuratKKM');
Route::get('/buatSuratKKMMHS/suratKKMMHS', 'BuatSuratMHSController@suratKKM');
Route::post('/buatSuratMHS/simpanSKKM', 'BuatSuratMHSController@simpanSKKM');
Route::get('/buatSuratKKMMHS/editKKMMHS/{id}', 'BuatSuratMHSController@editKKM');
Route::post('/buatSuratKKMMHS/updateKKM','BuatSuratMHSController@updateKKM');
Route::get('/buatSuratKKMMHS/deleteKKM/{id}','BuatSuratMHSController@deleteKKM');
Route::get('/buatSuratKKMMHS/cetakSuratKKM/{id}', 'BuatSuratMHSController@cetakSuratKKM');

//suratmasukMHS
Route::get('/suratMasukMHS', 'SuratMHSController@suratMasuk');
Route::get('/suratMasukMHS/cetakST1/{id}', 'SuratMHSController@cetakST');
Route::get('/suratMasukMHS/cetakSuratKKM/{id}', 'SuratMHSController@cetakSuratKKM');
//suratkeluar
Route::get('/suratKeluarMHS', 'SuratMHSController@suratKeluar');
//arsipsurat
Route::get('/arsipSuratMHS', 'SuratMHSController@arsipSurat');

//DOSEN
//suratTugas
Route::get('/buatSuratTugasDSN', 'BuatSuratDSNController@buatSuratTugas');
Route::get('/buatSuratTugasDSN/suratTugasDSN', 'BuatSuratDSNController@SuratTugas');
Route::post('/buatSuratDSN/simpanST', 'BuatSuratDSNController@simpanST');
Route::get('/buatSuratTugasDSN/lihatSuratTugasDSN/{id}', 'BuatSuratDSNController@viewST');
Route::get('/buatSuratTugasDSN/editSTDSN/{id}', 'BuatSuratDSNController@editST');
Route::post('/buatSuratTugasDSN/updateST','BuatSuratDSNController@updateST');
Route::get('/buatSuratTugasDSN/deleteST/{id}','BuatSuratDSNController@deleteST');
Route::get('/buatSuratTugasDSN/cetakST/{id}', 'BuatSuratController@cetakST');

//suratPersonalia
Route::get('/buatSuratPersonaliaDSN', 'BuatSuratDSNController@buatSuratPersonalia');
Route::get('/buatSuratPersonaliaDSN/suratPersonaliaDSN', 'BuatSuratDSNController@suratPersonalia');
Route::post('/buatSuratDSN/simpanSP', 'BuatSuratDSNController@simpanSP');
Route::get('/buatSuratPersonaliaDSN/editSPDSN/{id}', 'BuatSuratDSNController@editSP');
Route::post('/buatSuratPersonaliaDSN/updateSP','BuatSuratDSNController@updateSP');
Route::get('/buatSuratPersonaliaDSN/deleteSP/{id}','BuatSuratDSNController@deleteSP');
Route::get('/buatSuratPersonaliaDSN/cetakSP/{id}', 'BuatSuratDSNController@cetakSP');

//suratmasuk
Route::get('/suratMasukDSN', 'SuratDSNController@suratMasuk');
Route::get('/suratMasukDSN/cetakST2/{id}', 'SuratDSNController@cetakST');

//suratkeluar
Route::get('/suratKeluarDSN', 'SuratDSNController@suratKeluar');

//arsipsurat
Route::get('/arsipSuratDSN', 'SuratDSNController@arsipSurat');
