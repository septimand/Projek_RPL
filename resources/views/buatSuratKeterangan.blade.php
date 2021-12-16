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
            <a class="nav-link active" href="#">
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
                <a class="nav-link active" href="/buatSuratKeterangan">
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span data-feather="file"></span>
                Surat Keterangan
                </a>
            </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <span data-feather="mail"></span>
            &nbsp&nbsp&nbsp&nbsp Surat
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item " href="/suratMasuk">Surat Masuk</a></li>
            <li><a class="dropdown-item " href="/suratKeluar">Surat Keluar</a></li>
            <li><a class="dropdown-item" href="/arsipSurat">Arsip Surat</a></li>
          </ul>
        </li>
        </ul>
      </div>
    </nav>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="nav-link active">
      <a class="h6" href="#" type="button" style="text-decoration:none">Manajemen Surat</a>
        <a> &nbsp > &nbsp</a>
        <a class="h6" href="/buatSuratKKM" type="button" style="text-decoration:none">Mengelolah Surat Keterangan Aktif</a>
      </div>
      <div>
           <ul>
           <a class="btn btn-primary me-md-2" href="/buatSuratKeterangan/SKA" role="button">Buat Surat  (+)</a>
          </ul>
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
                <th scope="col"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Aksi</th>
                </tr>
            </thead>
                @php
                    $no =1;
                @endphp
                @foreach($kkm as $k)
                @if($k->id === Auth::user()->id)
                <tbody>
                    <tr>
                    <th scope="row">{{ $no++}}</th>
                    <td>{{$k -> jenis_surat}}</td>
                    <td>{{$k -> no_surat}}</td>
                    <td>{{$k -> tanggal_masuk}}</td>
                    <td>{{$k -> keterangan}}</td>
                    <td>{{$k -> status}}</td>
                    <td>
                        <a class="btn btn-primary" href="#" role="button" data-bs-toggle="modal" data-bs-target="#viewSKAModal<?php echo $no  ?>"><span data-feather="eye"></span></a>
                        @if($k->status != 'Disetujui')
                        <a class="btn btn-warning" href="buatSuratKeterangan/editSK/{{$k->id_surat}}" role="button"><span data-feather="edit"></span></a>
                        <a class="btn btn-danger" href="buatSuratKeterangan/deleteSK/{{$k->id_surat}}" role="button"><span data-feather="trash"></span></a>
                        @endif
                        @if ($k->status == 'Disetujui' )
                        <a class="btn btn-info" href="buatSuratKeterangan/cetakSK/{{$k->id_surat}}" role="button"><span data-feather="download-cloud"></span></a>
                        @endif
                    </td>
                    </tr><!-- Modal View-->
                     <div class="modal fade" id="viewSKAModal<?php echo $no  ?>" tabindex="-1" aria-labelledby="viewSPModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="viewSPModalLabel">Lihat Surat Keterangan </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="row">
                                <div class="mb-3">
                                    <label class="form-label"><b>Nomor Induk</b></label>
                                    <input type="text"  disabled class="form-control" name="tema_kgt" id="Temakegiatan" value="{{$k->no_induk}}" >
                                </div>
                                <div class="mb-3">
                                    <label class="form-label"> <b>Nama</b></label>
                                    <input  disabled type="text" class="form-control"  name="menetapkan" id="Penyelenggarakegiatan" value="{{$k->name}}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label"> <b>Jabatan</b></label>
                                    <input  disabled type="text" class="form-control"  name="menetapkan" id="Penyelenggarakegiatan" value="{{$k->keterangan_surat}}">
                                </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
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
