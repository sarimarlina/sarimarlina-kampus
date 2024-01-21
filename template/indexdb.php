<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>dashboard Admin</title>
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css" />
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="shortcut icon" href="assets/images/favicon.png" />
    
  </head>
  <body>
    <div class="container-scroller">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
          <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-image">
                <img src="assets/images/faces/adm.jpg" alt="profile" />
                <span class="login-status online"></span>
                <!--change to offline or busy as needed-->
              </div>
              <div class="nav-profile-text d-flex flex-column pr-3">
                <span class="font-weight-medium mb-2">Admin</span>
              </div>
              <span class="badge badge-danger text-white ml-3 rounded"></span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="kampus/index.html">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              <span class="menu-title">Kelola Data</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="../datainputdosen.php">Dosen</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../datainputpgw.php">Pegawai</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../datainputmhs.php">Mahasiswa</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../datainputkls.php">Kelas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../datainputnlai.php">Nilai_Mahasiswa</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              <span class="menu-title">Lihat Data</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="../tabeldatadosen.php">Dosen</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../tabeldatapgw.php">Pegawai</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../tabeldatamhs.php">Mahasiswa</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../tabeldatakls.php">Kelas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../tabeldatanlai.php">Nilai_mahasiswa</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../tabeldatadaftar.php">Calon Mahasiswa</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="indexlogin.php">
              <i class=""></i>
              <span class="menu-title">Sign Out</span>
            </a>
          </li>
        </ul>
      </nav>
      <div class="container-fluid page-body-wrapper">
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-default-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div> Default
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div> Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles light"></div>
            <div class="tiles dark"></div>
          </div>
        </div>
        <nav class="navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row">
          <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
            <a class="navbar-brand brand-logo-mini align-self-center d-lg-none" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
            <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
              <i class="mdi mdi-menu"></i>
            </button>
                <div class="dropdown-menu navbar-dropdown navbar-dropdown-large preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0"></h6>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="assets/images/faces/face4.jpg" alt="" class="profile-pic" />
                    </div>
                    
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="assets/images/faces/face3.jpg" alt="" class="profile-pic" />
                    </div>
                    
                  </a>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </nav>
        <div class="main-panel">
          <div class="content-wrapper pb-0">
            <div class="page-header flex-wrap">
              <h3 class="mb-0">Hallo Admin, Selamat datang <span class="pl-0 h6 pl-sm-2 text-muted d-inline-block"></span>
              </h3>
            </div>
            <!DOCTYPE html>
<html>
<head>
  <title>Jam Digital</title>
  <style>
    .clock {
      font-size: 32px;
      text-align: center;
      margin: 20px;
    }
  </style>
</head>
<body>
  <div class="clock" id="clock"></div>

  <script>
    function updateClock() {
      const now = new Date();
      const hours = String(now.getHours()).padStart(2, '0');
      const minutes = String(now.getMinutes()).padStart(2, '0');
      const seconds = String(now.getSeconds()).padStart(2, '0');

      const timeString = `${hours}:${minutes}:${seconds}`;
      document.getElementById('clock').textContent = timeString;
    }

    setInterval(updateClock, 1000);
    updateClock();
  </script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
  <title>Kalender Akademik</title>
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
    }

    th, td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
  <h1>Kalender Akademik</h1>
  <table>
    <tr>
      <th>Tanggal</th>
      <th>Acara</th>
    </tr>
    <tr>
      <td>2023-08-01</td>
      <td>Awal Semester Ganjil</td>
    </tr>
    <tr>
      <td>2023-09-10</td>
      <td>Ujian Tengah Semester Ganjil</td>
    </tr>
    <tr>
      <td>2023-12-20</td>
      <td>Akhir Semester Ganjil</td>
    </tr>
    <tr>
      <td>2024-01-10</td>
      <td>Awal Semester Genap</td>
    </tr>
    <tr>
      <td>2024-03-20</td>
      <td>Ujian Tengah Semester Genap</td>
    </tr>
    <tr>
      <td>2024-06-30</td>
      <td>Akhir Semester Genap</td>
    </tr>
    <!-- Tambahkan acara akademik lainnya di sini -->
  </table>
</body>
</html>
                <!--datepicker ends-->
              </div>
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="assets/vendors/flot/jquery.flot.js"></script>
    <script src="assets/vendors/flot/jquery.flot.resize.js"></script>
    <script src="assets/vendors/flot/jquery.flot.categories.js"></script>
    <script src="assets/vendors/flot/jquery.flot.fillbetween.js"></script>
    <script src="assets/vendors/flot/jquery.flot.stack.js"></script>
    <script src="assets/vendors/flot/jquery.flot.pie.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
    
  </body>
</html>