<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/brand/favicon.ico" />

    <!-- TITLE -->
    <title>UNIDDCOM</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="../assets/css/style.css" rel="stylesheet" />
    <link href="../assets/css/skin-modes.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!--- FONT-ICONS CSS -->
    <link href="../assets/css/icons.css" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="../assets/colors/color1.css" />

</head>

<body class="app sidebar-mini ltr light-mode">

  <!-- GLOBAL-LOADER -->
  <div id="global-loader">
      <img src="../assets/images/loader.svg" class="loader-img" alt="Loader">
  </div>
  <!-- /GLOBAL-LOADER -->

  <!-- PAGE -->
  <div class="page">
      <div class="page-main">

          <!-- app-Header -->
          <div class="app-header header sticky">
              <div class="container-fluid main-container">
                  <div class="d-flex">
                      <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="javascript:void(0)"></a>
                      <!-- sidebar-toggle-->
                      <a class="logo-horizontal" href="index.html">
                          <img src="../assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                          <img src="../assets/images/brand/logo-3.png" class="header-brand-img light-logo1"  alt="logo">
                      </a>
                      <!-- LOGO -->
                      <div class="d-flex order-lg-2 ms-auto header-right-icons">
                          <div class="navbar navbar-collapse responsive-navbar p-0">
                              <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                  <div class="d-flex order-lg-2">
                                      <!-- SIDE-MENU -->
                                      <div class="dropdown d-flex profile-1">
                                          <a href="javascript:void(0)" data-bs-toggle="dropdown" class="nav-link leading-none d-flex">
                                              <img src="../assets/images/users/21.jpg" alt="profile-user"
                                                  class="avatar  profile-user brround cover-image">
                                          </a>
                                          <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                              <div class="drop-heading">
                                                  <div class="text-center">
                                                      <h5 class="text-dark mb-0 fs-14 fw-semibold">NOME</h5>
                                                      <small class="text-muted">Senior Admin</small>
                                                  </div>
                                              </div>
                                              <div class="dropdown-divider m-0"></div>
                                              <a class="dropdown-item" href="#">
                                                  <i class="dropdown-icon fe fe-user"></i> Profile
                                              </a>
                                              <a class="dropdown-item" href="login.html">
                                                  <i class="dropdown-icon fe fe-alert-circle"></i> Sign out
                                              </a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- /app-Header -->

          <!--APP-SIDEBAR-->
          <div class="sticky" >
              <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
              <div class="app-sidebar" style="background-color: #000 !important;">
                  <div class="side-header">
                      <a class="header-brand1" href="index.html">
                          <img src="../assets/images/brand/logo.png" style="width:80% !important; height: 80% !important;" class="header-brand-img desktop-logo" alt="logo">
                          <img src="../assets/images/brand/logo-1.png" class="header-brand-img toggle-logo"alt="logo">
                          <img src="../assets/images/brand/logo-2.png" class="header-brand-img light-logo" alt="logo">
                          <img src="../assets/images/brand/logo-3.png" class="header-brand-img light-logo1"
                              alt="logo">
                      </a>
                      <!-- LOGO -->
                  </div>
                  <div class="main-sidemenu">
                      <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                              fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                              <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                          </svg></div>
                      <ul class="side-menu">
                          <li class="sub-category">
                              <h3>Main</h3>
                          </li>
                          <li class="slide">
                              <a class="side-menu__item has-link" data-bs-toggle="slide" href="dashboard"><i
                                      class="side-menu__icon fe fe-home"></i><span
                                      class="side-menu__label">Dashboard</span></a>
                          </li>
                          <hr style="width:50%;text-align:left;margin-left:25%">
                          <li class="sub-category">
                              <h3>File Manager</h3>
                          </li>
                          <li class="slide">
                              <a class="side-menu__item has-link" data-bs-toggle="slide" href="index.html"><i
                                      class="side-menu__icon bi bi-file-earmark-check"></i><span
                                      class="side-menu__label">Ficheiros Disponíveis</span></a>
                              <a class="side-menu__item has-link" data-bs-toggle="slide" href="index.html"><i
                                      class="side-menu__icon bi bi-file-earmark-excel"></i><span
                                      class="side-menu__label">Ficheiros Indisponíveis</span></a>
                              <a class="side-menu__item has-link" data-bs-toggle="slide" href="index.html"><i
                                      class="side-menu__icon bi bi-box-arrow-in-down"></i><span
                                      class="side-menu__label">Carregar Ficheiro</span></a>
                          </li>
                          <hr style="width:50%;text-align:left;margin-left:25%">
                          <li class="sub-category">
                              <h3>Administrador</h3>
                          </li>
                          <li class="slide">
                              <a class="side-menu__item has-link" data-bs-toggle="slide" href="usermanagement"><i
                                      class="side-menu__icon bi bi-people"></i><span
                                      class="side-menu__label">Gerir Utilizadores</span></a>
                          </li>

                      </ul>
                      <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                              width="24" height="24" viewBox="0 0 24 24">
                              <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                          </svg></div>
                  </div>
              </div>
              <!--/APP-SIDEBAR-->
          </div>

            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title" style="color: #000">User Management</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
                                    <li class="breadcrumb-item active" style="color: #000; " aria-current="page">Gestor de Utilizadores</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- ROW OPEN -->
                        <div class="row row-cards">
                            <div class="col-lg-12 col-xl-12">
                                <div class="card">
                                    <div class="card-header border-bottom-0 p-4">

                                    </div>
                                    <div class="e-table px-5 pb-5">
                                        <div class="table-responsive table-lg">
                                            <table class="table border-top table-bordered mb-0">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Foto</th>
                                                        <th>Nome</th>
                                                        <th>Email</th>
                                                        <th>Função</th>
                                                        <th class="text-center">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>



                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                        </div>
                        <!-- ROW CLOSED -->
                    </div>
                    <!-- CONTAINER CLOSED -->
                </div>
            </div>
            <!--app-content closed-->
        </div>

        <!-- FOOTER -->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 text-center">
                        <p style="color: #000;">Design by Ana Bernardino's Team.</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->
    </div>

    <!--JS ocultar consoante o tipo de user-->
    <script>



    </script>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up" style="color: #000;"></i></a>

    <!-- JQUERY JS -->
    <script src="assets/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- SPARKLINE JS-->
    <script src="assets/js/jquery.sparkline.min.js"></script>

    <!-- CHART-CIRCLE JS-->
    <script src="assets/js/circle-progress.min.js"></script>

    <!-- C3 CHART JS -->
    <script src="assets/plugins/charts-c3/d3.v5.min.js"></script>
    <script src="assets/plugins/charts-c3/c3-chart.js"></script>

    <!-- INPUT MASK JS-->
    <script src="assets/plugins/input-mask/jquery.mask.min.js"></script>

    <!-- SIDE-MENU JS -->
    <script src="assets/plugins/sidemenu/sidemenu.js"></script>

    <!-- SIDEBAR JS -->
    <script src="assets/plugins/sidebar/sidebar.js"></script>

    <!-- Select2 JS-->
    <script src="assets/plugins/select2/select2.full.min.js"></script>
    <script src="assets/js/select2.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="assets/plugins/p-scroll/perfect-scrollbar.js"></script>
    <script src="assets/plugins/p-scroll/pscroll.js"></script>
    <script src="assets/plugins/p-scroll/pscroll-1.js"></script>

    <!-- Color Theme js -->
    <script src="assets/js/themeColors.js"></script>

    <!-- Sticky js -->
    <script src="assets/js/sticky.js"></script>

    <!-- CUSTOM JS -->
    <script src="assets/js/custom.js"></script>

</body>

</html>
