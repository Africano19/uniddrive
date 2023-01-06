<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/brand/favicon.ico" />

    <!-- TITLE -->
    <title>Login</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="../assets/css/style.css" rel="stylesheet" />
    <link href="../assets/css/dark-style.css" rel="stylesheet" />
    <link href="../assets/css/transparent-style.css" rel="stylesheet">
    <link href="../assets/css/skin-modes.css" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="../assets/css/icons.css" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <!--<link id="theme" rel="stylesheet" type="text/css" media="all" href="../assets/colors/color1.css" />-->

    <style>
        .cwAlert {
            position: fixed;
            display: none;
            top: 1em;
            right: 1em;
            z-index: 1500;
        }
    </style>

</head>

<body class="app sidebar-mini ltr login-img" style="background-image: url(../assets/imagens/iade_uni.jpg);">

  <div id="emptyAlert" class="alert alert-warning alert-dismissible fade cwAlert" style="opacity: 1;">
    <strong>Erro:</strong> É necessário preencher todos os campos.
  </div>
  <div id="errorAlert" class="alert alert-danger alert-dismissible fade cwAlert" style="opacity: 1;">
    <strong>Erro:</strong> Não foi possível iniciar sessão.
  </div>
  <div id="loggedInAlert" class="alert alert-success alert-dismissible fade cwAlert" style="opacity: 1;">
    <strong>Sucesso:</strong> Sessão iniciada com sucesso!
  </div>
  <div id="unknownAlert" class="alert alert-danger alert-dismissible fade cwAlert" style="opacity: 1;">
    <strong>Erro:</strong> O servidor obteve um erro, por favor, contacte o administrador com o erro: AL01.
  </div>

    <!-- BACKGROUND-IMAGE -->
    <div class="">

        <!-- GLOABAL LOADER -->
        <div id="global-loader">
            <img src="../assets/images/loader.svg" class="loader-img" alt="Loader">
        </div>
        <!-- /GLOABAL LOADER -->

        <!-- PAGE -->
        <div class="page">
            <div class="">
                <div class="container-login100">
                    <div class="wrap-login100 p-6">
                        <form class="login100-form validate-form">
                            <span class="login100-form-title pb-5">
                                <a href="login.php"><img src="../assets/images/brand/login.png" class="header-brand-img" alt=""></a>
                            </span>
                            <div class="panel panel-primary">
                                <div class="tab-menu-heading">
                                    <div class="tabs-menu1">

                                    </div>
                                </div>
                                <div class="panel-body tabs-menu-body p-0 pt-5" >
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab5">
                                            <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="zmdi zmdi-email text-muted" aria-hidden="true"></i>
                                                </a>
                                                <input id="numeroi" class="input100 border-start-0 form-control ms-0" type="text" placeholder="Number">
                                            </div>
                                            <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                                </a>
                                                <input id="passwordi" class="input100 border-start-0 form-control ms-0" type="password" placeholder="Password">
                                            </div>

                                            <div class="container-login100-form-btn">
                                                <!--<a href="https://testes.uniddrive.pt/dashboard/" class="login100-form-btn btn-primary" style="background-color: #000 !important;">
                                                        Login
                                                </a>-->
                                                <button class="login100-form-btn btn-primary" style="background-color: #000 !important; border-color: #000 !important;" onclick="login()" type="button">Login</button>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <!-- CONTAINER CLOSED -->
            </div>
        </div>
        <!-- End PAGE -->

    </div>
    <!-- BACKGROUND-IMAGE CLOSED -->

    <!-- JQUERY JS -->
    <script src="../assets/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- SHOW PASSWORD JS -->
    <script src="../assets/js/show-password.min.js"></script>

    <!-- GENERATE OTP JS -->
    <script src="../assets/js/generate-otp.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="../assets/plugins/p-scroll/perfect-scrollbar.js"></script>

    <!-- Color Theme js -->
    <script src="../assets/js/themeColors.js"></script>

    <!-- CUSTOM JS -->
    <script src="../assets/js/custom.js"></script>

    <script src="../assets/js/login.js"></script>


</body>

</html>
