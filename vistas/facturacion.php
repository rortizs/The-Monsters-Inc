  <?php
    session_start();
    if(!isset($_SESSION["carrito"])) $_SESSION["carrito"] = [];
    $granTotal = 0;
  ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <title>SANATORIO SERVIMEDI | SISTEMA VENTAS</title>
  <link rel="icon" type="image/png" href="../files/dist/img/logo.png" style="max-width:100%;width:100px;height:auto; text-align:left;" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/7e73ebaf62.js" crossorigin="anonymous"></script>
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../files/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../files/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../files/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../files/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../files/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../files/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../files/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed" onload="mueveReloj()" class="hold-transition skin-dodgerblue sidebar-mini login-page fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    <a class="horaFecha">

						<form name="form_reloj">
							
							<input type="text" class="border border-white" name="reloj" size="1" class="reloj" onfocus="window.document.form_reloj.reloj.blur()">
                            <script src="../files/hora.js"></script>
                            <b style="color: black">|</b>
							<script src="../files/fecha.js"></script>
                            <b style="color: black">|</b>
						</form>

					</a>
    <li>
      <button type="button" class="btn btn-danger"><i class="fas fa-power-off"></i></button> 
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="menu.php" class="brand-link">
      <img src="../logo.png" height="30px" width="80px" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Sanatorio Servimedi</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          
          <li class="nav-header">Panel Principal</li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fab fa-buffer"></i>
              <p>
                Movimientos
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="compras.php" class="nav-link">
                  <i class="fas fa-genderless"></i>
                  <p> <i class="fas fa-cart-plus"></i> Compras</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="ventas.php" class="nav-link">
                  <i class="fas fa-genderless"></i>
                  <p> <i class="fas fa-truck"></i> Ventas</p>
                </a>
              </li>
            </ul>
          </li>
          

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-box-open"></i>
              <p>
                Inventario
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="productos.php" class="nav-link">
                  <i class="fas fa-genderless"></i>
                  <p><i class="fas fa-barcode"></i> Productos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="categorias.php" class="nav-link">
                  <i class="fas fa-genderless"></i>
                  <p><i class="fab fa-stack-overflow"></i> Categorias</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-users"></i>
              <p>
                Personas
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="clientes.php" class="nav-link">
                  <i class="fas fa-genderless"></i>
                  <p><i class="fas fa-user"></i> Clientes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="proveedores.php" class="nav-link">
                  <i class="fas fa-genderless"></i>
                  <p><i class="fas fa-user"></i> Proveedores</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="far fa-folder-open"></i>
              <p>
                Reportes
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-genderless"></i>
                  <p><i class="far fa-file"></i></i> Reporte de Compras</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-genderless"></i>
                  <p><i class="far fa-file"></i></i> Reporte de Ventas</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-cogs"></i>
              <p>
                Configuracion
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="usuarios.php" class="nav-link">
                  <p><i class="fas fa-users-cog"></i> Administrador de Usuarios</p>
                </a>
              </li>
            </ul>
          </li>


          

      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="fas fa-truck"></i> Facturacion</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="menu.php"><i class="fas fa-home"></i>Inicio</a></li>
              <li class="breadcrumb-item active">V1.0</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


      
<div class="w-100 p-3" style="background-color: #eee;">
  <label>NUEVA VENTA</label>
  <div class="w-25 p-3 float-left" style="background-color: #eee;">
        <div class="input-group">
          <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
                <input type="text" aria-label="nombreuser" class="form-control" placeholder="Usuario" disabled="true">
        </div>
    
          <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
                <select class="custom-select" id="inputGroupSelect01">
                  <option selected>Cliente</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
          </div>
  </div>

  <div class="w-75 p-3 float-right" style="background-color: #eee;"> 
    Productos
  <button>Realizar venta</button>
  </div>

</div> 
<br>
<br>
<div class="box-body">

  <?php
      if(isset($_GET["status"])){
        if($_GET["status"] === "1"){
          ?>
            <div class="alert alert-success">
              <strong>¡Correcto!</strong> Venta realizada correctamente
            </div>
          <?php
        }else if($_GET["status"] === "2"){
          ?>
          <div class="alert alert-info">
              <strong>Venta cancelada</strong>
            </div>
          <?php
        }else if($_GET["status"] === "3"){
          ?>
          <div class="alert alert-info">
              <strong>Ok</strong> Producto quitado de la lista
            </div>
          <?php
        }else if($_GET["status"] === "4"){
          ?>
          <div class="alert alert-warning">
              <strong>Error:</strong> El producto que buscas no existe
            </div>
          <?php
        }else if($_GET["status"] === "5"){
          ?>
          <div class="alert alert-danger">
              <strong>Error: </strong>El producto está agotado
            </div>
          <?php
        }else{
          ?>
          <div class="alert alert-danger">
              <strong>Error:</strong> Algo salió mal mientras se realizaba la venta
            </div>
          <?php
        }
      }
    ?>
  <br>
    <form method="post" action="../modelos/prueba.php">
      <label for="codigo">Código de barras:</label>
      <input autocomplete="off" autofocus class="form-control" name="codigo" required type="text" id="codigo" placeholder="Escribe el código">
    </form>
    <br><br>
     <table class="table table-bordered table-hover dt-responsive tablas" width="100%">
      <thead>
       <tr>
         <th style="text-align: center">ID Producto</th>
         <th style="text-align: center">Codigo</th>
         <th style="text-align: center">Nombre</th>
         <th style="text-align: center">Precio de Venta</th>
         <th style="text-align: center">Cantidad</th>
         <th style="text-align: center">Description</th>
         <th style="text-align: center;width:10px">Editar</th>
         <th style="text-align: center; width:10px">Estado</th>
         
       </tr> 
      </thead>
      <tbody style="text-align: center">

        <?php

        /* require_once ("../modelos/consultaProductoVenta.php"); */

        foreach($_SESSION["carrito"] as $indice => $row){
          $granTotal += $row[''];
      ?>
      <tr>
                  <td><?php echo $row['idproducto']?></td>
                  <td><?php echo $row['codigo']?></td>
                  <td><?php echo $row['nombre']?></td>
                  <td><?php echo $row['precio_venta']?></td>
                 <td><?php echo $row['stock']?></td>
                 <td><?php echo $row['descripcion']?></td>
                  <td>
                  <button class="btn btn-outline-warning btnEditarProveedor" data-toggle="modal" data-target="#modalModiCliente" idProveedor="1"><i class="fas fa-pencil-alt"></i></button>
                  </td>
                  <td>
                    <a class="btn btn-danger" href="<?php echo "quitarDelCarrito.php?indice=" . $indice?>"><i class="fa fa-trash"></i></a>
                  </td>
                      
                </tr> 
                <?php
                }
                ?>
      </tbody>
     </table>
  <h3>Total: <?php echo $granTotal; ?></h3>
    <form action="./terminarVenta.php" method="POST">
      <input name="total" type="hidden" value="<?php echo $granTotal;?>">
      <button type="submit" class="btn btn-success">Terminar venta</button>
      <a href="./cancelarVenta.php" class="btn btn-danger">Cancelar venta</a>
    </form>
    </div>
      

            
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="http://tcsogt.com">TCSOGT</a>.</strong>
    Todos los Derechos Reservados.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../files/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../files/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../files/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../files/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../files/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../files/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../files/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../files/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../files/plugins/moment/moment.min.js"></script>
<script src="../files/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../files/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../files/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../files/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../files/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../files/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../files/dist/js/demo.js"></script>
</body>
</html>
