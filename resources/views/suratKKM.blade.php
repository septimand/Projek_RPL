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
            <a class="nav-link active" href="/buatSuratKKM">
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
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <span data-feather="mail"></span>  
            &nbsp&nbsp&nbsp&nbsp Surat
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="/suratMasuk">Surat Masuk</a></li>
            <li><a class="dropdown-item" href="/suratKeluar">Surat Keluar</a></li>
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
        <a class="h6" href="/buatSuratKKM" type="button" style="text-decoration:none">Mengelolah Surat Keterangan Kegiatan Mahasiswa</a>
        <a> &nbsp > &nbsp</a>
        <a class="h6" href="/buatSuratKKM/suratKKM" type="button" style="text-decoration:none">Surat Keterangan Kegiatan Mahasiswa</a>
      </div>
      <form method="post" action="/buatSurat/simpanSKKM">
      <input type="hidden" name="_token" value="{{ csrf_token() }}" />
          <div class="row">
          <input type="hidden" class="form-control" id="jenis_surat" name="jenis_surat" value ="Surat Keterangan Kegiatan Mahasiswa">
          <input type="hidden" class="form-control" id="id" name="id" value ="{{ Auth::user()->id }}">
                <div class="mb-3">
                    <label class="form-label">Hal</label>
                    <input type="text" class="form-control" id="Temakegiatan" name="hal" placeholder="Masukkan Perihal" >
                </div>
                <div class="mb-3">
                    <label class="form-label"> Taggal Pembuatan Surat</label>
                    <input type="date" class="form-control" id="Harikegiatan" name="tgl_surat">
                </div>
                <div class="mb-3">
                    <label class="form-label">Kepada</label>
                    <input type="text" class="form-control" id="Penyelenggarakegiatan" name="kepada" placeholder="Masukkan Tujuan Surat">
                </div>
                <div class="mb-3">
                    <label class="form-label"> Keterangan</label>
                    <input type="text" class="form-control" id="Tempatkegiatan" name="keterangan_surat"placeholder="Masukkan Keterangan Surat">
                </div>
                <div class="mb-3">
                    <label class="form-label"> Tempat</label>
                    <input type="text" class="form-control" id="tanngalkegiatan" name="tmpt_kgt" placeholder="Masukkan Tempat Pelaksanaan">
                </div>
                <div class="mb-3">
                    <label class="form-label"> Taggal Kegiatan</label>
                    <input type="date" class="form-control" id="Harikegiatan" name="tgl_laksanakan" placeholder="Masukkan Tanggal">
                </div>
                <div class="mb-3">
                    <label class="form-label"> Waktu</label>
                    <input type="time" class="form-control" id="tanngalkegiatan" name="waktu_kgt" placeholder="Masukkan Waktu Pelaksanaan">
                </div>
                <input class="btn btn-primary mt-4" type="submit" value="Kirim">
        </div></form>
    </main>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="/js/dashboard.js"></script>
  </body>
</html>
