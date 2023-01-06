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

    <script src="jquery-3.6.0.min.js"></script>

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
                                                <a class="dropdown-item" href="/dashboard">
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
                                <a class="side-menu__item has-link" data-bs-toggle="slide" href="fileupload"><i
                                        class="side-menu__icon bi bi-box-arrow-in-down"></i><span
                                        class="side-menu__label">Carregar Documentos</span></a>
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

                      <!-- Button trigger modal -->
                      <button style="color: black !important;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" class="side-menu__item has-link" data-bs-toggle="slide" href="#myModal">
                        Upload ficheiro
                      </button>

                      <!-- Button trigger modal 2-->
                      <button style="color: black !important;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2" class="side-menu__item has-link" data-bs-toggle="slide" href="#myModal2">
                        Upload projeto
                      </button>


                    </div>
                    <!-- CONTAINER END -->
                </div>
            </div>
            <!--app-content close-->

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

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 style="color: black" class="modal-title" id="exampleModalLabel">Carregar ficheiro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="/action_page.php">
                  <label style="color: black" for="fname">Nome do conteudo:</label>
                  <input type="text" id="fname" name="fname"><br><br>
                  <label style="color: black" for="categories">Escolha uma categoria:</label>
                  <select name="categories" id="categories">
                    <option value="1">Teste 1</option>
                    <option value="2">Teste 2</option>
                  </select>
                  <br><br>
                  <label style="color: black" for="categories">Caso exista escolha um projeto:</label>
                  <select name="projects" id="projects">
                    <option value="1">Nenhum</option>
                    <option value="2">Projeto 1</option>
                    <option value="2">Projeto 2</option>
                  <select/>
                  <br><br>
                  <label style="color: black" for="myfile">Escolha o ficheiro:</label>
                  <input type="file" id="myfile" name="myfile"><br><br>
                  <input type="submit" value="Enviar">
                </form>
              </div>
              <div class="modal-footer">
                <button style="color: white; background-color: black !important;" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal 2-->
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 style="color: black" class="modal-title" id="exampleModalLabel2">Carregar Projeto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="/action_page.php">
                  <label style="color: black" for="fname2">Nome do projeto:</label>
                  <input type="text" id="fname2" name="fname2"><br><br>
                  <label style="color: black" for="fdate">Data do projeto:</label>
                  <input type="date" id="fdate" name="fdate"><br><br>
                  <label style="color: black" for="students">Curso:</label><br>
                  <select name="courses" multiple>
                    <option value="111">Curso 1</option>
                    <option value="222">Curso 2</option>
                    <option value="333">Curso 3</option>
                    <option value="444">Curso 4</option>
                  </select><br><br>
                  <label style="color: black" for="students">Unidade curricular:</label><br>
                  <select name="units" multiple>
                    <option value="1111">UC 1</option>
                    <option value="2222">UC 2</option>
                    <option value="3333">UC 3</option>
                    <option value="4444">UC 4</option>
                  </select><br><br>
                  <label style="color: black" for="fabs">Abstract do projeto:</label>
                  <textarea id="fabs" name="fabs" rows="5" cols="50"></textarea><br><br>
                  <label style="color: black" for="fabs">Bibliografia do projeto:</label>
                  <textarea id="fbiblio" name="fbiblio" rows="5" cols="50"></textarea>
                  <label style="color: black" for="students">Alunos presentes:</label><br>
                  <select id=studentsjs name="students" multiple>
                    <option id=teste value="11"></option>
                    <option value="22">Marta</option>
                    <option value="33">Rúben </option>
                    <option value="44">Passarinho</option>
                  </select><br><br>
                  <input type="submit" value="Enviar">
                </form>
              </div>
              <div class="modal-footer">
                <button style="color: white; background-color: black !important;" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
              </div>
            </div>
          </div>
        </div>

    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up" style="color: #000;"></i></a>


    <!-- JQUERY JS -->
    <script src="../assets/js/jquery.min.js"></script>


    <!-- BOOTSTRAP JS -->
    <script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- SPARKLINE JS-->
    <script src="../assets/js/jquery.sparkline.min.js"></script>

    <!-- Sticky js -->
    <script src="../assets/js/sticky.js"></script>

    <!-- CHART-CIRCLE JS-->
    <script src="../assets/js/circle-progress.min.js"></script>

    <!-- PIETY CHART JS-->
    <script src="../assets/plugins/peitychart/jquery.peity.min.js"></script>
    <script src="../assets/plugins/peitychart/peitychart.init.js"></script>

    <!-- SIDEBAR JS -->
    <script src="../assets/plugins/sidebar/sidebar.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="../assets/plugins/p-scroll/perfect-scrollbar.js"></script>
    <script src="../assets/plugins/p-scroll/pscroll.js"></script>
    <script src="../assets/plugins/p-scroll/pscroll-1.js"></script>

    <!-- INTERNAL CHARTJS CHART JS-->
    <script src="../assets/plugins/chart/Chart.bundle.js"></script>
    <script src="../assets/plugins/chart/rounded-barchart.js"></script>
    <script src="../assets/plugins/chart/utils.js"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="../assets/plugins/select2/select2.full.min.js"></script>

    <!-- INTERNAL Data tables js-->
    <script src="../assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="../assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
    <script src="../assets/plugins/datatable/dataTables.responsive.min.js"></script>

    <!-- INTERNAL APEXCHART JS -->
    <script src="../assets/js/apexcharts.js"></script>
    <script src="../assets/plugins/apexchart/irregular-data-series.js"></script>

    <!-- INTERNAL Flot JS -->
    <script src="../assets/plugins/flot/jquery.flot.js"></script>
    <script src="../assets/plugins/flot/jquery.flot.fillbetween.js"></script>
    <script src="../assets/plugins/flot/chart.flot.sampledata.js"></script>
    <script src="../assets/plugins/flot/dashboard.sampledata.js"></script>

    <!-- INTERNAL Vector js -->
    <script src="../assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- SIDE-MENU JS-->
    <script src="../assets/plugins/sidemenu/sidemenu.js"></script>

	<!-- TypeHead js -->
	<script src="../assets/plugins/bootstrap5-typehead/autocomplete.js"></script>
    <script src="../assets/js/typehead.js"></script>

    <!-- INTERNAL INDEX JS -->
    <script src="../assets/js/index1.js"></script>

    <!-- Color Theme js -->
    <script src="../assets/js/themeColors.js"></script>

    <!-- CUSTOM JS -->
    <script src="../assets/js/custom.js"></script>

    <script>

    console.log("TUTU")
    /*
            var url = 'https://testes.uniddrive.pt/fileupload/getStudents'

            $.getJSON(url, function(data){
              console.log("TESTE:")
              console.log(data[0])
              document.getElementById("teste").innerHTML = data.stu_name;
            })

            function getStudents(){
                var credentials={
                    'name': $("#teste").val()
                }

                $.ajax({
                    url: "fileupload/getStudents",
                    type: "GET",
                    data: credentials,
                    dataType: "JSON",
                    success: function(result){
                        if(result.state == "error")
                        {
                            showAlert("#errorAlert");
                        }
                        else
                        {
                          var data = JSON.parse(result)
                            data.item.forEach((item, i) => {
                              studentsjs.option.add({
                                item.stu_name
                              }).draw();
                            });

                        }
                    }
                });
            }*/

            window.onload = async function(){

               try {

                   let studentss = await $.ajax({

                      url: "https://testes.uniddrive.pt/fileupload/getStudents",
                      method: "get",
                      dataType: "json",

                   });

                 let html = "";
                 for(let student of studentss.item){
                   console.log("Alunos: " + student);
                   html += 2;
                 }

                 ementaElem.innerHTML = html;


               }  catch(err){
                 console.log(err);
               }


              }

    </script>

</body>

</html>
