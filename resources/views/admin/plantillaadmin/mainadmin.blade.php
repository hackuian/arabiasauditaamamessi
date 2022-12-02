<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Sistema de administracion de Maxibasquet </title>
    @yield('hojasEstilo')
    <!-- Bootstrap -->
    <link href="../admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css" integrity="sha512-HHsOC+h3najWR7OKiGZtfhFIEzg5VRIPde0kB0bG2QRidTQqf+sbfcxCTB16AcFB93xMjnBIKE29/MjdzXE+qw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- NProgress -->
    <link href="../admin/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../admin/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="../admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../admin/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../admin/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../admin/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="#" class="site_title"><i class="fa-solid fa-basketball"></i> Maxibasquet</a>
            </div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                
              </div>
              <div class="profile_info">
                
              </div>
            </div>
            <!-- /menu profile quick info -->


                        <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                
                <ul class="nav side-menu">
                  <li><a><i class="fa-solid fa-user"></i> Jugadores <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="../administrador/jugadorescrear"><i class="fa-solid fa-user-plus"></i> Crear Jugador</a></li>
                      <li><a href="../administrador/jugadoresedit"><i class="fa-solid fa-user-pen"></i> Editar Jugador</a></li>
                      <li><a href="../administrador/jugadoreseliminar"><i class="fa-solid fa-user-xmark"></i> Eliminar Jugador</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa-solid fa-users"></i> Equipo <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="../administrador/editarequipo"><i class="fa-solid fa-users-gear"></i> Completar datos del Equipo</a></li>
                      
                    </ul>
                  </li>

                  
                  <li><a><i class="fa-solid fa-users"></i> Categorias <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="../administrador/categoriascrear"><i class="fa-solid fa-users-gear"></i> Crear categoria</a></li>
                      
                    </ul>
                  </li>

                  <li><a><i class="fa-solid fa-user"></i> Torneos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="../administrador/torneocrear"><i class="fa-solid fa-user-plus"></i> Crear Torneo</a></li>
                      <li><a href="../administrador/torneoedit"><i class="fa-solid fa-user-pen"></i> Editar torneo</a></li>
                      <li><a href="../administrador/torneoeliminar"><i class="fa-solid fa-user-xmark"></i> Eliminar torneo</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa-solid fa-user"></i> Arbitros <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="../administrador/arbitroscrear"><i class="fa-solid fa-user-plus"></i> Crear arbitro</a></li>
                      <li><a href="../administrador/arbitrosedit"><i class="fa-solid fa-user-pen"></i> Editar arbitro</a></li>
                      <li><a href="../administrador/arbitroseliminar"><i class="fa-solid fa-user-xmark"></i> Eliminar arbitro</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa-solid fa-user"></i> Escenarios<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="../administrador/escenarioscrear"><i class="fa-solid fa-user-plus"></i> Crear escenarios</a></li>
                      <li><a href="../administrador/escenariosedit"><i class="fa-solid fa-user-pen"></i> Editar escenarios</a></li>
                      <li><a href="../administrador/escenarioseliminar"><i class="fa-solid fa-user-xmark"></i> Eliminar escenarios</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa-solid fa-user"></i> Partidos<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="../administrador/partidoscrear"><i class="fa-solid fa-user-plus"></i> Crear partidos</a></li>
                      <li><a href="../administrador/partidosedit"><i class="fa-solid fa-user-pen"></i> Editar partidos</a></li>
                      <li><a href="../administrador/partidoseliminar"><i class="fa-solid fa-user-xmark"></i> Eliminar partidos</a></li>
                    </ul>
                  </li>
                
                
                
                
                </ul>


              </div>

            </div>
            <!-- /sidebar menu -->

            
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                 
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-gears"></i>  
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="javascript:;"> Perfil</a>
                    <a class="dropdown-item"  href="login.html"><i class="fa fa-sign-out pull-right"></i> Salir</a>
                  </div>
                </li>

                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- /PAGE CONTENT  -->

        <div class="right_col" role="main">
          @yield('contenido')
        </div>
        <!-- /PAGE CONTENT  -->
      </div>
    </div>
    @yield('script')
    <!-- jQuery -->
    <script src="../admin/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../admin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../admin/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../admin/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../admin/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js../ -->
    <script src="../admin/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../admin/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../admin/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../admin/vendors/Flot/jquery.flot.js"></script>
    <script src="../admin/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../admin/vendors/Flot/jquery.flot.time.js"></script>
    <script src="../admin/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../admin/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../admin/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../admin/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../admin/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../admin/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../admin/vendors/moment/min/moment.min.js"></script>
    <script src="../admin/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../admin/build/js/custom.min.js"></script>
	
  </body>
</html>
