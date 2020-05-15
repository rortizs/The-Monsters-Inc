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
            <h1 class="m-0 text-dark"><i class="fas fa-cart-plus"></i> Compras</h1>
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



 
<!-- Codigo tabla y boton para modal -->
<section class="content">
  <div class="box box-dodgerblue">
    <div class="box-header with-border">
      <button class="btn btn-success" data-toggle="modal" data-target="#modalCompra">
          <i class="fas fa-plus"></i> Nueva Compra
      </button>
      <hr>     
    <div class="box-body">
     <table class="table table-bordered table-hover dt-responsive tablas" width="100%" id="tablaUsuarios">
      <thead>
       <tr>
          <th style="width:5px">No.</th>
         <th style="text-align: center">Proveedor</th>
         <th style="text-align: center">Usuario</th>
         <th style="text-align: center">Comprobante</th>
          <th style="text-align: center">Fecha compra</th>
           <th style="text-align: center">Producto</th>
           <th style="text-align: center">Cantidad</th>
           <th style="text-align: center">Precio</th>
               <th style="text-align: center">Total</th>
         <th style="text-align: center;width:10px">Editar</th>
         <th style="text-align: center; width:10px">Estado</th>
         
       </tr> 
      </thead>
      <tbody style="text-align: center">
        
        <?php

        require_once ("../modelos/mostrarcompras.php");

        foreach($query as $row){

      

      ?>
      <tr>
                  <td><?php echo $row['idcompra']?></td>
                  <td><?php echo $row['casa_comercial']?></td>
                  <td><?php echo $row['nombre']?></td>
                  <td><?php echo $row['num_comprobante']?></td>
                  <td><?php echo $row['fecha']?></td>
                  <td><?php echo $row['nombrepro']?></td>
                  <td><?php echo $row['cantidad']?></td>
                  <td><?php echo $row['precio']?></td>
                  <td><?php echo $row['total']?></td>
                 
                  <td>
                  <button class="btn btn-outline-warning btnEditarProveedor" data-toggle="modal" data-target="#modalModiCliente" idProveedor="1"><i class="fas fa-pencil-alt"></i></button>
                  </td>
                  <td>
                    <div class="btn-group">  
                      <button class="btn btn-success btnEditarProveedor" data-toggle="modal" data-target="#" idProveedor="1"><i class="fas fa-check"></i></button>
                      <button class="btn btn-danger btnEliminarProveedor" idProveedor="1"><i class="fa fa-times"></i></button></div>  
                  </td>
                      
                </tr> 
                <?php
                }
                ?>  





      </tbody>
     </table>
    </div>
  </div>
</section>


<!-- Modal Agregar Compra -->
<div class="modal fade" id="modalCompra" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
       <form action="../modelos/agregarcompra.php" method="post">
      <div class="modal-header bg bg-info">
        <img src="../files/dist/img/comlogo.png" heigth="105px" width="400px">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
    

         <h5>Proveedor:</h5>
      <div class="input-group flex-nowrap">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-edit"></i></span>
                </div>

                <select class="custom-select"  id="inputGroupSelect01" name="proveedor">
               
               <?php
               require_once ("../config/conexion.php");

                      $result=mysqli_query($conexion,"SELECT idproveedor, casa_comercial FROM proveedor");
                      while($dato = mysqli_fetch_array($result)){
                      ?> 
                            <option value="<?php echo $dato['idproveedor'];?>"> <?php echo $dato['casa_comercial'] ?></option>
                     <?php
                }
                ?>  
                </select>
            </div>

                <br>
              <h5>Producto:</h5>
              <div class="input-group flex-nowrap">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-edit"></i></span>
                </div>
                <select class="custom-select"  id="inputGroupSelect01" name="producto">
               
               <?php
               require_once ("../config/conexion.php");

                      $result=mysqli_query($conexion,"SELECT idproducto, nombre FROM producto");
                      while($dato = mysqli_fetch_array($result)){
                      ?> 
                            <option value="<?php echo $dato['idproducto'];?>"> <?php echo $dato['nombre'] ?></option>
                     <?php
                }
                ?>  
                </select>
            </div>

              <br>

              <div class="input-group flex-nowrap">
            
                <div class="input-group-prepend">
                    <span class="input-group-text" id="addon-wrapping">C</span>
                </div>
                <input type="text" class="form-control" placeholder="cantidad a comprar" aria-label="totalCompra" aria-describedby="addon-wrapping" name="cantidad">
                    
            </div> 

             <br>


              <div class="input-group flex-nowrap">
            
                <div class="input-group-prepend">
                    <span class="input-group-text" id="addon-wrapping">Q.</span>
                </div>
                <input type="text" class="form-control" placeholder="Precio unitario venta" aria-label="totalCompra" aria-describedby="addon-wrapping" name="preciouni">
                    
            </div> 


             <br>

                 <div class="input-group flex-nowrap">
            
                <div class="input-group-prepend">
                    <span class="input-group-text" id="addon-wrapping">#</span>
                </div>
                <input type="text" class="form-control" placeholder="Numero de comprobante" aria-label="totalCompra" aria-describedby="addon-wrapping" name="comprobante">
                    
            </div> 

          
            <br>
            <div class="input-group flex-nowrap">
            
                <div class="input-group-prepend">
                    <span class="input-group-text" id="addon-wrapping">Q.</span>
                </div>
                <input type="text" class="form-control" placeholder="Total Compra" aria-label="totalCompra" aria-describedby="addon-wrapping" name="total">
                    
            </div> 



      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-outline-danger pull-left" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-outline-primary">Guardar Cambios</button>
        
      </div>
      </form>
    </div>
  </div>
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
