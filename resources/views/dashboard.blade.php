<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->

  <!-- Google Fonts -->
  <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link href="{{url('assets/css/styles.css')}}" rel="stylesheet"/>
        <link
            href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"
            rel="stylesheet"
            crossorigin="anonymous"/>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"
            crossorigin="anonymous"></script>
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href={{ "temp/vendor/bootstrap/css/bootstrap.min.css" }} rel="stylesheet">
  <link href={{ "temp/vendor/bootstrap-icons/bootstrap-icons.css" }} rel="stylesheet">
  <link href={{ "temp/vendor/boxicons/css/boxicons.min.css" }} rel="stylesheet">
  <link href={{ "temp/vendor/quill/quill.snow.css" }} rel="stylesheet">
  <link href={{ "temp/vendor/quill/quill.bubble.css" }} rel="stylesheet">
  <link href={{ "temp/vendor/remixicon/remixicon.css" }} rel="stylesheet">
  <link href={{ "temp/vendor/simple-datatables/style.css" }} rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href={{ "temp/css/style.css" }} rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <span class="d-none d-lg-block">SiAbsensi</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->


    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown">

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">

            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        id="userDropdown"
                        href="#"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false">
                        <i class="fas fa-user fa-fw"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{url('logout')}}">Logout</a>
                    </div>
                </li>
            </ul>
    </nav>
  </header>

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="/home">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Absensi Siswa</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/absen">
              <i class="bi bi-circle"></i><span>Absen</span>
            </a>
          </li>
          <li>
            <a href="{{url('rayon')}}">
              <i class="bi bi-circle"></i><span>Rayon</span>
            </a>
          </li>
          <li>
            <a href="/rombel">
              <i class="bi bi-circle"></i><span>Rombel</span>
            </a>
          </li>
          <li>
            <a href="/register">
              <i class="bi bi-circle"></i><span>Registrasi Siswa</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">
    @yield('main')
  <!-- ======= Footer ======= -->
  </main>
  <!-- <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>ADEN</span></strong> RPL XI-3
    </div> -->

  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src={{ "temp/vendor/apexcharts/apexcharts.min.js" }}></script>
  <script src={{ "temp/vendor/bootstrap/js/bootstrap.bundle.min.js" }}></script>
  <script src={{ "temp/vendor/chart.js/chart.min.js" }}></script>
  <script src={{ "temp/vendor/echarts/echarts.min.js" }}></script>
  <script src={{ "temp/vendor/quill/quill.min.js" }}></script>
  <script src={{ "temp/vendor/simple-datatables/simple-datatables.js" }}></script>
  <script src={{ "temp/vendor/tinymce/tinymce.min.js" }}></script>
  <script src={{ "temp/vendor/php-email-form/validate.js" }}></script>

  <!-- Template Main JS File -->
  <script src={{ "temp/js/main.js" }}></script>
  <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            crossorigin="anonymous"></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>

</body>

</html>