<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LSP - ADMIN</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- DataTables CSS-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/vendor/datatables.net-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/vendor/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/css/style.default.premium.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/img/favicon.ico">
  </head>
  <body>
    <div class="page">
      <!-- Main Navbar-->
      <header class="header">
        <nav class="navbar">
          <!-- Search Box-->
          <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
              <input type="search" placeholder="What are you looking for..." class="form-control">
            </form>
          </div>
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="index.html" class="navbar-brand d-none d-sm-inline-block">
                <div class="brand-text d-none d-lg-inline-block"><strong>LSP Dashboard</strong></div>
                <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>BD</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Search-->
                <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>
                <!-- Notifications-->
                <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell-o"></i><span class="badge bg-red badge-corner">12</span></a>
                <ul aria-labelledby="notifications" class="dropdown-menu">
                  <li><a rel="nofollow" href="#" class="dropdown-item">
                    <div class="notification">
                      <div class="notification-content"><i class="fa fa-envelope bg-green"></i>You have 6 new messages </div>
                      <div class="notification-time"><small>4 minutes ago</small></div>
                    </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item">
                      <div class="notification">
                        <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                        <div class="notification-time"><small>4 minutes ago</small></div>
                      </div></a></li>
                      <li><a rel="nofollow" href="#" class="dropdown-item">
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-upload bg-orange"></i>Server Rebooted</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                        <li><a rel="nofollow" href="#" class="dropdown-item">
                          <div class="notification">
                            <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                            <div class="notification-time"><small>10 minutes ago</small></div>
                          </div></a></li>
                          <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>view all notifications                                            </strong></a></li>
                        </ul>
                      </li>
                      <!-- Messages                        -->
                      <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope-o"></i><span class="badge bg-orange badge-corner">10</span></a>
                      <ul aria-labelledby="notifications" class="dropdown-menu">
                        <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                          <div class="msg-profile"> <img src="http://localhost:8000/adminx/img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                          <div class="msg-body">
                            <h3 class="h5">Jason Doe</h3><span>Sent You Message</span>
                          </div></a></li>
                          <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                            <div class="msg-profile"> <img src="http://localhost:8000/adminx/img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle"></div>
                            <div class="msg-body">
                              <h3 class="h5">Frank Williams</h3><span>Sent You Message</span>
                            </div></a></li>
                            <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                              <div class="msg-profile"> <img src="http://localhost:8000/adminx/img/avatar-3.jpg" alt="..." class="img-fluid rounded-circle"></div>
                              <div class="msg-body">
                                <h3 class="h5">Ashley Wood</h3><span>Sent You Message</span>
                              </div></a></li>
                              <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>Read all messages   </strong></a></li>
                            </ul>
                          </li>
                          <!-- Languages dropdown    -->
                          <li class="nav-item dropdown"><a id="languages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link language dropdown-toggle"><img src="http://localhost:8000/adminx/img/flags/16/GB.png" alt="English"><span class="d-none d-sm-inline-block">English</span></a>
                          <ul aria-labelledby="languages" class="dropdown-menu">
                            <li><a rel="nofollow" href="#" class="dropdown-item"> <img src="http://localhost:8000/adminx/img/flags/16/DE.png" alt="English" class="mr-2">German</a></li>
                            <li><a rel="nofollow" href="#" class="dropdown-item"> <img src="http://localhost:8000/adminx/img/flags/16/FR.png" alt="English" class="mr-2">French                                         </a></li>
                          </ul>
                        </li>
                        <!-- Logout    -->
                        <li class="nav-item"><a href="/logout" class="nav-link logout"> <span class="d-none d-sm-inline">Logout</span><i class="fa fa-sign-out"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </nav>
              </header>
              <div class="page-content d-flex align-items-stretch">
                <!-- Side Navbar -->
                <nav class="side-navbar">
                  <!-- Sidebar Header-->
                  <div class="sidebar-header d-flex align-items-center">
                    <div class="avatar"><img src="http://localhost:8000/adminx/img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                    <div class="title">
                      <h1 class="h4">Mark Stephen</h1>
                      <p>Web Designer</p>
                    </div>
                  </div>
                  <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
                  <ul class="list-unstyled">
                    <li class="active"><a href="/panel"> <i class="icon-home"></i>Home </a></li>
                    <li><a href="/admin/apl1"> <i class="icon-grid"></i>APL 1 </a></li>
                    <li><a href="/admin/apl2"> <i class="icon-grid"></i>APL 2 </a></li>
                    <li><a href="#kompetensi" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Unit Kompetensi </a>
                    <ul id="kompetensi" class="collapse list-unstyled ">
                      <li><a href="/admin/tambah-kompetensi">Tambah Kompetensi</a></li>
                      <li><a href="/admin/list-kompetensi">Daftar Kompetensi</a></li>
                    </ul>
                  </li>
                    <li><a href="#berita" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Berita </a>
                    <ul id="berita" class="collapse list-unstyled ">
                      <li><a href="/admin/tambah-berita">Tambah Berita</a></li>
                      <li><a href="/admin/list-berita">Daftar Berita</a></li>
                    </ul>
                  </li>
                    <li><a href="#bank" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Bank </a>
                    <ul id="bank" class="collapse list-unstyled ">
                      <li><a href="/admin/tambah-bank">Tambah Bank</a></li>
                      <li><a href="/admin/list-bank">Daftar Bank</a></li>
                    </ul>
                  </li>
                    <li><a href="#gallery" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Gallery </a>
                    <ul id="gallery" class="collapse list-unstyled ">
                      <li><a href="/admin/tambah-gallery">Tambah Gallery</a></li>
                      <li><a href="/admin/list-gallery">Daftar Gallery</a></li>
                    </ul>
                  </li>
                  <li><a href="forms.html"> <i class="icon-padnote"></i>Forms </a></li>
                  <li><a href="forms.html"> <i class="icon-padnote"></i>Forms </a></li>
                  <li><a href="forms.html"> <i class="icon-padnote"></i>Forms </a></li>
                  <li><a href="#pembayaran" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Pembayaran </a>
                  <ul id="pembayaran" class="collapse list-unstyled ">
                    <li><a href="/panel/bayar">Bayar</a></li>
                    <li><a href="/panel/bukti-pembayaran">Bukti Pembayaran</a></li>
                    <li><a href="#">Bukti Pendaftaran</a></li>
                  </ul>
                </li>
              </ul><span class="heading">Extras</span>
              <ul class="list-unstyled">
                <li> <a href="#"> <i class="icon-flask"></i>Demo </a></li>
                <li> <a href="#"> <i class="icon-screen"></i>Demo </a></li>
                <li> <a href="#"> <i class="icon-mail"></i>Demo </a></li>
                <li> <a href="#"> <i class="icon-picture"></i>Demo </a></li>
              </ul>
            </nav>
            <div class="content-inner">
              @yield('content')
              <footer class="main-footer">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-sm-6">
                      <p>LSP &copy; 2019</p>
                    </div>
                    <div class="col-sm-6 text-right">
                      <p>Version 1.4.5</p>
                    </div>
                  </div>
                </div>
              </footer>
            </div>
          </div>
        </div>
        <!-- JavaScript files-->
        <script src="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/vendor/jquery/jquery.min.js"></script>
        <script src="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/vendor/popper.js/umd/popper.min.js"> </script>
        <script src="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/vendor/jquery.cookie/jquery.cookie.js"> </script>
        <script src="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/vendor/chart.js/Chart.min.js"></script>
        <script src="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/vendor/jquery-validation/jquery.validate.min.js"></script>
        <!-- Data Tables-->
        <script src="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/vendor/datatables.net/js/jquery.dataTables.js"></script>
        <script src="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/vendor/datatables.net-bs4/js/dataTables.bootstrap4.js"></script>
        <script src="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/vendor/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
        <script src="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/js/tables-datatable.js"></script>
        <!-- Main File-->
        <script src="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/js/front.js"></script>
      </body>
    </html>