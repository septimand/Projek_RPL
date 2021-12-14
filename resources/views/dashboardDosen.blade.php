<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SI Surat</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="css/adminlte.css">

        <script src="{{ asset('js/app.js') }}" defer></script>




        <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="/css/dashboard.css" rel="stylesheet">
    </head>
<body>

    <header class="navbar navbar-light sticky-top bg-Info flex-md-nowrap p-0 shadow-sm">
        <a class="navbar-brand navbar-light col-md-3 col-lg-2 me-0 px-3" href="#">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSIRAMEN-FTI</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-light">
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
                <a class="nav-link active" aria-current="page" href="/dashboardDosen">
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
                <a class="nav-link  " href="/buatSuratTugasDSN">
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span data-feather="file"></span>
                Surat Tugas
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="/buatSuratPersonaliaDSN">
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span data-feather="file"></span>
                Surat Keterangan
                </a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle dropdown-toggle-split" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <span data-feather="mail"></span>
                &nbsp&nbsp&nbsp&nbsp Surat
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="/suratMasukDSN">Surat Masuk</a></li>
                <li><a class="dropdown-item" href="/suratKeluarDSN">Surat Keluar</a></li>
                <li><a class="dropdown-item" href="/arsipSuratDSN">Arsip Surat</a></li>
            </ul>
            </li>
            </ul>
        </div>
        </nav>
    </div>
    </div>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="col-10">
                    <main class="content ">
                        <div class="container-fluid pt-4">
                            <div class="row">
                                <div class="col-sm-6 d-inline-flex">
                                    <div class="card flex-fill" style="background-color: #39D5D5">
                                        <div class="card-body py-4">
                                            <div class="d-flex align-items-start">
                                                <div class="flex-grow-1">
                                                    <p class="mb-0">Surat Tugas</p>
                                                    <h3 class="mb-2">{{$ST}}</h3>
                                                    <a class="mb-0" href="/buatSuratTugasDSN">Lihat detail</a>
                                                </div>
                                                <div class="d-inline-block ms-3">
                                                    <div class="stat mt-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="#507A9E" class="bi bi-tag" viewBox="0 0 16 16">
                                                            <path d="M6 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm-1 0a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0z"/>
                                                            <path d="M2 1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 1 6.586V2a1 1 0 0 1 1-1zm0 5.586 7 7L13.586 9l-7-7H2v4.586z"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 d-inline-flex">
                                    <div class="card flex-fill" style="background-color: #6D8BA5">
                                        <div class="card-body py-4">
                                            <div class="d-flex align-items-start">
                                                <div class="flex-grow-1">
                                                    <p class="mb-0" style="color: white;">Surat Keterangan</p>
                                                    
                                                    <h3 class="mb-2" style="color: white;">{{$SK}}</h3>
                                                    
                                                    <a class="mb-0" href="/buatSuratPersonaliaDSN" style="color:#89C5CC;">Lihat detail</a>
                                                </div>
                                                <div class="d-inline-block ms-3">
                                                    <div class="stat mt-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="#507A9E" class="bi bi-tag" viewBox="0 0 16 16">
                                                            <path d="M6 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm-1 0a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0z"/>
                                                            <path d="M2 1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 1 6.586V2a1 1 0 0 1 1-1zm0 5.586 7 7L13.586 9l-7-7H2v4.586z"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        </main>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="/js/dashboard.js"></script>
</body>
</html>
