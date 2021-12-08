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
            <a class="nav-link " aria-current="page" href="/dashboardDosen">
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
            <a class="nav-link active " href="/buatSuratTugasDSN">
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span data-feather="file"></span>
              Surat Tugas
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="/buatSuratPersonaliaDSN">
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span data-feather="file"></span>
              Surat Personalia
            </a>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle dropdown-toggle-split " href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <span data-feather="mail"></span>
            &nbsp&nbsp&nbsp&nbsp Surat
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="/suratMasukDSN">Surat Masuk</a></li>
            <li><a class="dropdown-item " href="/suratKeluarDSN">Surat Keluar</a></li>
            <li><a class="dropdown-item" href="/arsipSuratDSN">Arsip Surat</a></li>
          </ul>
        </li>
        </ul>
      </div>
    </nav>
  </div>
</div>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

<br><br>
<body><div class="container-fluid">
    @foreach($st as $k)
        <img class="logodisp" src="https://www.ukdw.ac.id/wp-content/uploads/2017/10/logo-ukdw.png" style="float: left; height:90px">
            <div style="font-size: 18px">UNIVERSITAS KRISTEN DUTA WACANA</div>
            <div style="font-size: 18px">FAKULTAS TEKNOLOGI INFORMASI</div>
            <ul><ul><ul><li><div style="font-size: 12px">PROGRAM STUDI INFORMATIKA</div></li>
                <li><div style="font-size: 12px">PROGRAM STUDI SISTEM INFORMASI</div></li></ul></ul></ul>

        <hr>

        <br>

        <div class="row" align="center">
            <h2><u>Surat Tugas</u></h2>
            <h3>No. :  </h3><!--System-->
        </div>

        <br>

        <div class="col-sm; ml-10; mr-10;" align="justify">
            <div style="font-size: 16px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dengan ini Dekan Fakultas Teknologi Informasi Universitas Kristen Duta Wacana memberikan tugas kepada :</div><br>
            <div class="col-sm">
                <ul>
                <ul>
                <ul>
                <ul>
                <ul>
                    <li>
                        <div style="font-size: 16px;"> NIK  :  {{$k->no_induk}} </div><!--Nik-->
                    </li>
                    <li>
                        <div style="font-size: 16px;"> Nama : {{$k->name}} </div><!--Nama-->
                    </li>
                </ul>
                </ul>
                </ul>
                </ul>
                </ul>
        </div>

        <br>

        <div class="col-sm">
            <div style="font-size: 16px;">Untuk tugas sebagai {{$k->kgt_tugas}}, Tema dan Penulisan Proposal Pengabdian kepada Masyarakat,
                yang diselenggarakan oleh LPPM UKDW, pada tanggal {{$k->tgl_laksanakan}}.</div>
                <!--Tema Kegiatan,Penyelenggara Kegiatan, Tempat Kegiatan, Hari, Tanggal Pelaksanaan Kegiatan-->
            <br>
            <div style="font-size: 16px;">Demikian surat tugas ini dibuat untuk dapat dipergunakan sebagaimana perlunya.
                Kepada penerima tugas setelah menyelesaikan tugas dimohon menyampaikan laporan kepada pemberi tugas.</div>
            <br>
            <br>
            <br>
            <br>
        </div>
        <div align="right">
                <div style="font-size: 16px">24 Januari 2020</div>
                <div style="font-size: 16px">Dekan,</div><br><br><br><br><br><br>
                <div style="font-size: 16px"><b><u>Restyandito, S.Kom., MSIS., Ph.D.</u></b></div><!--Nama Pengirim-->
                <div style="font-size: 16px">NIK : 004 E 289</div><!--NIK Pengirim--><br><br>
        </div>
    @endforeach
</div></body>
<div class="d-grid gap-2">
        <a class="btn btn-info" href="/buatSuratTugasDSN" role="button">Kembali</span></a>
</div><br>
</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="/js/dashboard.js"></script>
  </body>
</html>
