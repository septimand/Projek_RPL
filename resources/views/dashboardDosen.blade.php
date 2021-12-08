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
                Surat Personalia
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

    <div class="content-wrapper">
                    <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                        <div class="col-sm-6">
                            <h3>Dashboard</h3>
                        </div>

                        </div>
                    </div><!-- /.container-fluid -->
            </section>

                    <!-- Main content -->

            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-md-9 ">

                            <!-- BAR CHART -->
                            <div class="card card-default">
                            <div class="card-header">
                                <h3 class="card-title">Bar Chart</h3>

                                <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart">
                                <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; width: 100%;"></canvas>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>

                        <div class="col-lg-3 float-sm-right">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <p align="center">Surat Personalia & SK</p>
                                <div class="inner">
                                    <font>Rata-Rata Pertahun :</font><br>
                                    <font>rata-Rata Perbulan :</font><br>
                                    <font>Total :</font>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-ios-paper"></i>
                                </div>
                                <a href="/buatSuratPersonalia" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        <!-- /.card -->

                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <p align="center">Surat Tugas dan DP3</p>
                            <div class="inner">
                                <font>Rata-Rata Pertahun :</font><br>
                                <font>rata-Rata Perbulan :</font><br>
                                <font>Total :</font>
                            </div>
                            <div class="icon">
                                <i class="ion ion-ios-paper"></i>
                            </div>
                            <a href="/buatSuratTugas" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </div>
                    <!-- /.content -->

        <!-- jQuery -->
        <script src="style/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="style/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="style/dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="style/dist/js/demo.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="/js/dashboard.js"></script>
</body>
</html>
