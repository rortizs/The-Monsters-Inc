<?php

session_start();

?>

<!DOCTYPE html>

<html>

<head>

  <title>SANATORIO SERVIMEDI | SISTEMA DE VENTAS</title>

  <link rel="icon" href="vistas/img/plantilla/logo.png">

  <meta name="theme-color" content="orangered">
  
  <meta name="theme-color" content="#ff4500">

  <meta property="The Monsters-Inc"/>

  <meta name="author" content="The Monsters-Inc"/>

  <meta name="copyright" content="The Monsters-Incs"/>

  <meta name="description" content= "Sanatorio Servimedi | Sistema de Ventas" />
  
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <meta charset="utf-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta http-equiv='cache-control' content='no-cache'>

  <meta http-equiv='expires' content='0'>

  <meta http-equiv='pragma' content='no-cache'>

  <!--=====================================
                    CSS
  ======================================-->

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="vistas/bower_components/bootstrap/dist/css/bootstrap.css">

  <link rel="stylesheet" href="vistas/bower_components/bootstrap-select/dist/css/bootstrap-select.css">

  <!-- Daterange picker -->
  <link rel="stylesheet" href="vistas/bower_components/bootstrap-daterangepicker/daterangepicker.css">

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/7e73ebaf62.js" crossorigin="anonymous"></script>

  <!-- Ionicons -->
  <link rel="stylesheet" href="vistas/bower_components/Ionicons/css/ionicons.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/dist/css/AdminLTE.css">
  
  <!-- AdminLTE Skins -->
  <link rel="stylesheet" href="vistas/dist/css/skins/_all-skins.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <link href="vistas/fonts/Montserrat-Thin.ttf" rel="stylesheet">
  <link href="vistas/fonts/Montserrat-Medium.ttf" rel="stylesheet">
  <link href="vistas/fonts/Montserrat-Regular.ttf" rel="stylesheet">

   <!-- DataTables -->
  <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">

  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="vistas/plugins/iCheck/all.css">

  <!-- Morris chart -->
  <link rel="stylesheet" href="vistas/bower_components/morris.js/morris.css">

  <!--=====================================
                  JavaScript
  ======================================-->
  
  <!-- jQuery 3 -->
  <script src="vistas/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
  <!-- Bootstrap 3.3.7 -->
  <script src="vistas/bower_components/bootstrap/dist/js/bootstrap.js"></script>
  <script src="vistas/bower_components/bootstrap-select/dist/js/bootstrap-select.js"></script>

  <!-- FastClick -->
  <script src="vistas/bower_components/fastclick/lib/fastclick.js"></script>
  
  <!-- AdminLTE App -->
  <script src="vistas/dist/js/adminlte.js"></script>

  <!-- DataTables -->
  <script src="vistas/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/responsive.bootstrap.min.js"></script>

  <!-- SweetAlert 2 -->
  <script src="vistas/plugins/sweetalert2/sweetalert2.all.js"></script>

  <!-- By default SweetAlert2 doesn't support IE. To enable IE 11 support, include Promise polyfill:-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

  <!-- iCheck 1.0.1 -->
  <script src="vistas/plugins/iCheck/icheck.min.js"></script>

  <!-- InputMask -->
  <script src="vistas/plugins/input-mask/jquery.inputmask.js"></script>
  <script src="vistas/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
  <script src="vistas/plugins/input-mask/jquery.inputmask.extensions.js"></script>
  <!-- jQuery Number -->

  <script src="vistas/plugins/jqueryNumber/jquerynumber.min.js"></script>

  <!-- daterangepicker -->
  <script src="vistas/bower_components/moment/min/moment.min.js"></script>
  <script src="vistas/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>

  <!-- Morris.js charts -->
  <script src="vistas/bower_components/raphael/raphael.min.js"></script>
  <script src="vistas/bower_components/morris.js/morris.min.js"></script>

  <!-- ChartJS -->
  <script src="vistas/bower_components/chart.js/Chart.js"></script> 

</head>

<!--=====================================
                  BODY 
======================================-->

<body onload="mueveReloj()" class="hold-transition skin-dodgerblue sidebar-mini login-page fixed">

  <?php

  if(isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok"){

   echo '<div class="wrapper">';

    /*=============================================
                       HEADER
    =============================================*/

    include "modulos/header.php";

    /*=============================================
                        MENU
    =============================================*/

    include "modulos/menu.php";

    /*=============================================
                      CONTENIDO
    =============================================*/

    if(isset($_GET["ruta"])){

      if($_GET["ruta"] == "inicio" ||
         $_GET["ruta"] == "usuarios" ||
         $_GET["ruta"] == "categorias" ||
         $_GET["ruta"] == "productos" ||
         $_GET["ruta"] == "clientes" ||
         $_GET["ruta"] == "facturacion" ||
         $_GET["ruta"] == "crear-venta" ||
         $_GET["ruta"] == "editar-venta" ||
         $_GET["ruta"] == "reportes" ||
         $_GET["ruta"] == "proveedores" ||
         $_GET["ruta"] == "Pagos" ||
         $_GET["ruta"] == "salir"){

        include "modulos/".$_GET["ruta"].".php";

      }else{

        include "modulos/404.php";

      }

    }else{

      include "modulos/inicio.php";

    }

    /*=============================================
                      FOOTER
    =============================================*/

    include "modulos/footer.php";

    echo '</div>';

  }else{

    include "modulos/login.php";

  } 

  ?>

  <script src="vistas/js/categorias.js"></script>
  <script src="vistas/js/clientes.js"></script>
  <script src="vistas/js/plantilla.js"></script>
  <script src="vistas/js/productos.js"></script>
  <script src="vistas/js/reportes.js"></script>
  <script src="vistas/js/usuarios.js"></script>
  <script src="vistas/js/ventas.js"></script>
  <script src="vistas/js/proveedores.js"></script>
  <script src="vistas/js/faq.js"></script>

  <script src="vistas/js/active.js"></script>
  <script src="vistas/js/top.js"></script>
  <script src="vistas/js/home.js"></script>
  <script src="vistas/js/tecla.js"></script>
  <script src="vistas/js/hora.js"></script>
  <script src="vistas/js/modulo11.js"></script>
  <script src="vistas/js/cui.js"></script>
  <script src="vistas/js/temperatura.js"></script>
  
  

</body>

</html>