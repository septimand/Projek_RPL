<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SI Surat</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="{{ asset('js/app.js') }}" defer></script>




    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
  </head>
  <body>

<header class="navbar navbar-dark sticky-top bg-Info flex-md-nowrap p-0 shadow-sm">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSIRAMEN-FTI</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-dark">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="/logout">
      <span data-feather="log-out"></span></a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="/dashboardAdmin">
                <span data-feather="home"></span>
                Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#">
              <span data-feather="plus-circle"></span>
              Manajemen Surat
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link  " href="/buatSuratTugas">
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span data-feather="file"></span>
              Surat Tugas
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="/buatSuratPersonalia">
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span data-feather="file"></span>
              Surat Personalia
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="/buatSuratUndangan">
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span data-feather="file"></span>
              Surat Undangan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="/buatSuratKKM">
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span data-feather="file"></span>
              Surat KKM
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="/buatSuratBA">
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span data-feather="file"></span>
              Berita Acara
            </a>
          </li>
            <li class="nav-item">
                <a class="nav-link" href="/buatSuratKeterangan">
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span data-feather="file"></span>
                Surat Keterangan
                </a>
            </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <span data-feather="mail"></span>
            &nbsp&nbsp&nbsp&nbsp Surat
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item active" href="/suratMasuk">Surat Masuk</a></li>
            <li><a class="dropdown-item" href="/suratKeluar">Surat Keluar</a></li>
            <li><a class="dropdown-item" href="/arsipSurat">Arsip Surat</a></li>
          </ul>
        </li>
        </ul>
      </div>
    </nav>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="nav-link active">
      <a class="h6" href="#" type="button" style="text-decoration:none">Surat</a>
        <a> &nbsp > &nbsp</a>
        <a class="h6" href="/suratMasuk" type="button" style="text-decoration:none">Mengelolah Surat Masuk</a>
      </div>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Jenis Surat</th>
                <th scope="col">No Surat</th>
                <th scope="col">Tanggal Masuk</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Status</th>
                <th scope="col">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAksi</th>
                </tr>
            </thead>
                @php
                    $no =1;
                @endphp
                @foreach($sm as $m)
                @if($m->id_pejabat == null && $m->keterangan == null)
                <tbody>
                    <tr>
                    <th scope="row">{{ $no++}}</th>
                    <td>{{$m -> jenis_surat}}</td>
                    <td>{{$m -> no_surat}}</td>
                    <td>{{$m -> tanggal_masuk}}</td>
                    <td>{{$m -> keterangan}}</td>
                    <td> 
                    @if($m->status == 'Disetujui')
                                    <small class="btn btn-success ">{{$m -> status}}</small>
                                    @elseif ($m->status == 'Ditolak')
                                        <small class="btn btn-danger ">{{$m -> status}}</small>
                                    @else
                                        <small class="badge badge-pill badge-warning">diproses</small>
                                    @endif
                    <td>
                        <!--view surat-->
                        @if($m->jenis_surat == 'Surat Personalia')
                            <a class="btn btn-primary" href="#" role="button" data-bs-toggle="modal" data-bs-target="#viewSPModal<?php echo $no  ?>"><span data-feather="eye"></span></a>
                        @elseif ($m->jenis_surat == 'Surat Tugas')
                            <a class="btn btn-primary" href="#" role="button" data-bs-toggle="modal" data-bs-target="#viewSTModal<?php echo $no  ?>"><span data-feather="eye"></span></a>
                        @elseif ($m->jenis_surat == 'Surat Undangan')
                            <a class="btn btn-primary" href="#" role="button" data-bs-toggle="modal" data-bs-target="#viewSUModal<?php echo $no  ?>"><span data-feather="eye"></span></a>
                        @elseif ($m->jenis_surat == 'Surat Keterangan Kegiatan Mahasiswa')
                            <a class="btn btn-primary" href="#" role="button" data-bs-toggle="modal" data-bs-target="#viewSKKMModal<?php echo $no  ?>"><span data-feather="eye"></span></a>
                        @elseif ($m->jenis_surat == 'Berita Acara')
                        <a class="btn btn-primary" href="#" role="button" data-bs-toggle="modal" data-bs-target="#viewBAModal<?php echo $no  ?>"><span data-feather="eye"></span></a>
                        @endif
                        
                        <!--validasi surat-->
                        <a class="btn btn-danger" href="#" role="button" data-bs-toggle="modal" data-bs-target="#validasiModal<?php echo $no  ?>"><span data-feather="file-plus"></span></a>
                        
                        <!--ttd atau keterangan surat-->
                            @if ($m->status == 'Disetujui')
                            <a class="btn btn-primary" href="#" role="button" data-bs-toggle="modal" data-bs-target="#ttdModal<?php echo $no  ?>"><span data-feather="feather"></span></a>
                            @elseif ($m->status == 'Ditolak')
                            <a class="btn btn-warning" href="#" role="button" data-bs-toggle="modal" data-bs-target="#ketModal<?php echo $no  ?>"><span data-feather="alert-octagon"></span></a>
                            @endif
                    </td>
                    </tr>
                      <!-- Modal View surat Tugas-->
                    <div class="modal fade" id="viewSTModal<?php echo $no  ?>" tabindex="-1" aria-labelledby="viewSTModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="viewSTModalLabel">Lihat Surat Tugas</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <div class="row">
                            <div class="mb-3">
                                <label class="form-label">Nomor Induk</label>
                                <input type="text" class="form-control " disabled name="no_induk" value="{{$m->no_induk}}" placeholder="Masukkan Nomor Induk" >
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control" disabled name="name" value="{{$m->name}}" placeholder="Masukkan Nama" >
                            </div>

                            <div class="mb-3">
                                <label class="form-label"> Keterangan Tugas Sebagai</label>
                                <input type="text" class="form-control" disabled  name="kgt_tugas" value="{{$m->kgt_tugas}}" placeholder="Masukkan Keterangan Tugas">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tema kegiatan</label>
                                <input type="text" class="form-control" disabled name="tema_kgt" value="{{$m->tema_kgt}}" placeholder="Masukkan Tema kegiatan" >
                            </div>
                            <div class="mb-3">
                                <label class="form-label"> Penyelenggara kegiatan</label>
                                <input type="text" class="form-control" disabled name="pyng_kgt" value="{{$m->pyng_kgt}}" placeholder="Masukkan Penyelenggara kegiatan">
                            </div>
                            <div class="mb-3">
                                <label class="form-label"> Tanggal pelaksanaan kegiatan</label>
                                <input type="date" class="form-control" disabled name="tgl_laksanakan" value="{{$m->tgl_laksanakan}}" placeholder="Masukkan Tanggal pelaksanaan kegiatan">
                            </div>
                        </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- Modal View Personalia-->
                    <div class="modal fade" id="viewSPModal<?php echo $no  ?>" tabindex="-1" aria-labelledby="viewSPModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="viewSPModalLabel">Lihat Surat Personalia</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="row">
                                <div class="mb-3">
                                    <label class="form-label"><b>Tentang</b></label>
                                    <input type="text"  disabled class="form-control" name="tema_kgt" id="Temakegiatan" value="{{$m->tema_kgt}}" >
                                </div>
                                    <center><label class="form-label text-center"> <b>Memutuskan :</b></label></center>
                                <div class="mb-3">
                                    <label class="form-label"> <b>Menetapkan</b></label>
                                    <input  disabled type="text" class="form-control"  name="menetapkan" id="Penyelenggarakegiatan" value="{{$m->menetapkan}}">
                                </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Modal view surat undangan-->
                    <div class="modal fade" id="viewSUModal<?php echo $no ?>" tabindex="-1" aria-labelledby="viewSUModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="viewSUModalLabel">Lihat Surat Undangan</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <div class="row">
                                <div class="mb-3">
                                    <label class="form-label">Hal</label>
                                    <input type="text" class="form-control" disabled id="Temakegiatan" name="hal" value="{{$m->hal}}" >
                                </div>
                                <div class="mb-3">
                                    <label class="form-label"> Taggal Pembuatan Surat</label>
                                    <input type="date" class="form-control" disabled id="Harikegiatan" name="tgl_surat" value="{{$m->tgl_surat}}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Kepada</label>
                                    <input type="text" class="form-control" disabled id="Penyelenggarakegiatan" name="kepada" value="{{$m->kepada}}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label"> Keterangan</label>
                                    <input type="text" class="form-control" disabled id="Tempatkegiatan" name="keterangan_surat" value="{{$m->keterangan_surat}}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label"> Tempat</label>
                                    <input type="text" class="form-control" disabled id="tanngalkegiatan" name="tmpt_kgt" value="{{$m->tmpt_kgt}}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label"> Taggal Kegiatan</label>
                                    <input type="date" class="form-control" disabled id="Harikegiatan" name="tgl_laksanakan" value="{{$m->tgl_laksanakan}}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label"> Waktu</label>
                                    <input type="time" class="form-control" disabled id="tanngalkegiatan" name="waktu_kgt" value="{{$m->waktu_kgt}}">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                        </div>
                         <!-- Modal view surat KKM-->
                    <div class="modal fade" id="viewSKKMModal<?php echo $no ?>" tabindex="-1" aria-labelledby="viewSKKMModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="viewSKKMModalLabel">Lihat Surat Keterangan Kegiatan Mahasiswa</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <div class="row">
                                <div class="mb-3">
                                    <label class="form-label">Hal</label>
                                    <input type="text" class="form-control" disabled id="Temakegiatan" name="hal" value="{{$m->hal}}" >
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Kepada</label>
                                    <input type="text" class="form-control" disabled id="Penyelenggarakegiatan" name="kepada" value="{{$m->kepada}}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label"> Keterangan</label>
                                    <input type="text" class="form-control" disabled id="Tempatkegiatan" name="keterangan_surat" value="{{$m->keterangan_surat}}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label"> Tempat</label>
                                    <input type="text" class="form-control" disabled id="tanngalkegiatan" name="tmpt_kgt" value="{{$m->tmpt_kgt}}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label"> Taggal Kegiatan</label>
                                    <input type="date" class="form-control" disabled id="Harikegiatan" name="tgl_laksanakan" value="{{$m->tgl_laksanakan}}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label"> Waktu</label>
                                    <input type="time" class="form-control" disabled id="tanngalkegiatan" name="waktu_kgt" value="{{$m->waktu_kgt}}">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                        </div>
                        <!-- Modal view berita acara-->
                      <div class="modal fade" id="viewBAModal<?php echo $no  ?>" tabindex="-1" aria-labelledby="viewBAModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="viewBAModalLabel">Lihat Berita Acara</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <div class="row">
                                    <div class="mb-3">
                                        <label class="form-label">Tema Kegiatan</label>
                                        <input type="text" disabled class="form-control" id="Temakegiatan" name="tema_kgt" value="{{$m->tema_kgt}}" >
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label"> Tanggal</label>
                                        <input type="date" disabled class="form-control" id="Tempatkegiatan" name="tgl_laksanakan" value="{{$m->tgl_laksanakan}}">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label"> Tempat</label>
                                        <input type="text" disabled class="form-control" id="tanngalkegiatan" name="tmpt_kgt" value="{{$m->tmpt_kgt}}" >
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label"> Narasumber</label>
                                        <input type="text" disabled class="form-control" id="Penyelenggarakegiatan" name="kepada" value="{{$m->kepada}}" >
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label"> Target Peserta Kegiatan</label>
                                        <input type="text" disabled class="form-control" id="Harikegiatan" name="keterangan_surat" value="{{$m->keterangan_surat}}" >
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                            <!-- validasi surat-->
                            <form method="post" action="/suratMasuk/simpan">
                            <div class="modal fade" id="validasiModal<?php echo $no  ?>" tabindex="-1" aria-labelledby="validasiModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="validasiModalLabel">Apakah Disetuiji?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                    <input type="hidden" class="form-control "  name="id_surat" value="{{$m->id_surat}}" >
                                </div>
                                <div class="modal-body">
                                <div class="row">

                                    <div class="mb-3">
                                        <input class="form-check-input" type="radio" name="status"
                                            <label class="form-check-label" for="exampleRadios1" value="Disetujui">
                                                Disetuju &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                            </label>
                                        <input class="form-check-input" type="radio" name="status"
                                            <label class="form-check-label" for="exampleRadios1" value="Ditolak">
                                                Ditolak
                                            </label>
                                    </div>

                            </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" value="simpan">Simpan</button>
                                </div>
                                </div>
                            </div>
                            </div>
                            </form>


                <!-- tanda tangan -->
                <form method="post" action="/suratMasuk/simpanTTD">
                <div class="modal fade" id="ttdModal<?php echo $no  ?>" tabindex="-1" aria-labelledby="ttdModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ttdModalLabel">Tanda Tangan Surat</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <input type="hidden" class="form-control "  name="id_surat" value="{{$m->id_surat}}" >
                        @if ($m->jenis_surat == 'Surat Personalia' )
                            <input type="hidden" class="form-control "  name="no_surat" value="{{ $inventarisA }}/A/FTI/<?php echo date("Y")?>">
                        @elseif ($m->jenis_surat == 'Surat Keterangan Kegiatan Mahasiswa')
                            <input type="hidden" class="form-control "  name="no_surat" value="{{ $inventarisB }}/B/FTI/<?php echo date("Y")?>">
                        @elseif ($m->jenis_surat == 'Surat Undangan')
                            <input type="hidden" class="form-control "  name="no_surat" value="{{ $inventarisC }}/C/FTI/<?php echo date("Y")?>">
                        @elseif ($m->jenis_surat == 'Surat Tugas')
                            <input type="hidden" class="form-control "  name="no_surat" value="{{ $inventarisD }}/D/FTI/<?php echo date("Y")?>">
                        @elseif ($m->jenis_surat == 'Berita Acara')
                            <input type="hidden" class="form-control "  name="no_surat" value="{{ $inventarisE }}/E/FTI/<?php echo date("Y")?>">
                            @endif
                    </div>
                    <div class="modal-body">
                            <label class="form-label"> Tanggal TTD</label>
                            <input type="date" class="form-control" id="tanggal_masuk" name="tanggal_masuk" placeholder="Masukkan Tanggal pelaksanaan kegiatan">
                        </div>
                    <div class="modal-body">
                        <select class="form-select" aria-label="Default select example" name="id_pejabat">
                            <option selected>Nama Dosen</option>
                            <option value="1">Restyandito, S.Kom, MSIS., Ph.D</option>
                            <option value="2">Drs. Jong Jek Siang, M.Sc.</option>
                            <option value="3">Budi Sutedjo DO, S.Kom, MM.</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" value="simpan">Simpan</button>
                    </div>
                    </div>
                </div>
                </div></form>
        
             <!-- Keterangan surat setelah di tolak-->
             <form method="post" action="/suratMasuk/keterangan">
                            <div class="modal fade" id="ketModal<?php echo $no  ?>" tabindex="-1" aria-labelledby="ketModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ketModalLabel">Keterangan Ditolak</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                    <input type="hidden" class="form-control "  name="id_surat" value="{{$m->id_surat}}" >
                                </div>
                                <div class="modal-body">
                                <div class="row">
                                <div class="mb-3">
                                        <label class="form-label"> Keterangan</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="keterangan" ></textarea>
                                    </div>
                                </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" value="simpan">Simpan</button>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                </form>
        </tbody>
        @endif
     @endforeach
    </table>
    </main>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="/js/dashboard.js"></script>
  </body>
</html>
