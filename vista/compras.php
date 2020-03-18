<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/7e73ebaf62.js" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="icon" type="image/png" href="img/logo.png" style="max-width:100%;width:100px;height:auto; text-align:left;" />
	<title> Servimedi | Sistema Ventas </title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="reloj/ssty.css">
  <link rel="stylesheet" type="text/css" href="css/small.css">


</head>
<body>
	
<div class="container-fluid bg-secondary">
	
	<img src="img/logo2.png" style="max-width:30%;">

</div>

<nav class="navbar navbar-expand-md navbar-dark bg-info sticky-top">
  <a class="navbar-brand" href="#"><i class="fas fa-home"></i> Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"><i class="fab fa-buffer"></i> 
          Movimientos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"><i class="fas fa-cart-plus"></i> Compras</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"><i class="fas fa-truck"></i> Ventas</a>
        </div>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"><i class="fas fa-box-open"></i> 
          Inventario
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"><i class="fas fa-barcode"></i> Productos</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"><i class="fab fa-stack-overflow"></i> Categorias</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"><i class="far fa-folder-open"></i> Reportes</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"><i class="far fa-file"></i></i> Reporte Compras</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"><i class="far fa-file"></i> Reporte Ventas</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"><i class="fas fa-user"></i> 
          Personas
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"><i class="fas fa-user"></i> Clientes</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"><i class="fas fa-user"></i> Proveedores</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link text-danger" href="#"><i class="fas fa-sign-out-alt"></i> Salir</a>
      </li>
    </ul>
  </div>
</nav>
<br>
<center>
  <h1 class="text-info"><i class="fas fa-cart-plus"></i> COMPRAS</h1>
  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#CompraModal"><i class="fas fa-plus"></i> Nueva Compra</button>
<label class="text-dark"><i class="fas fa-search"></i>
  Buscar Compra<input type="search" class="form-control input-sm" placeholder aria-controls="DataTables_Table_0" name="">
</label>
</center>

<div class="box-body">

        <table class="bg-white table table-bordered table-hover dt-responsive tablas" width="100%">

          <thead>

            <tr>

              <th style="width:5px; text-align: center">No.</th>
              <th style="width:95px; text-align: center">Proveedor</th>
              <th style="width:60px; text-align: center">Total Compra</th>
              <th style="width:45px; text-align: center">Fecha</th>
              <th style="width:95px; text-align: center">Usuario</th>
              <th style="width:10px; text-align: center">Estado</th>

            </tr>

          </thead>
          <tbody style="text-align: center">
            <tr>

                  <td>1</td>
                  <td>Mynor Fernando</td>
                  <td>0.00</td>
                  <td>0/00/00</td>
                  <td>----</td>
                  <td>
                  <div class="btn-group">
                          
                      <button class="btn btn-success"><i class="fas fa-check"></i></button>

                      <button class="btn btn-danger"><i class="fa fa-times"></i></button></div>  
                  </td>
              </tr>
              <tr>
                  <td>1</td>
                  <td>Nestor Sanchez</td>
                  <td>0.00</td>
                  <td>0/00/00</td>
                  <td>----</td>
                  <td>
                  <div class="btn-group">
                          
                      <button class="btn btn-success"><i class="fas fa-check"></i></button>

                      <button class="btn btn-danger"><i class="fa fa-times"></i></button></div>  
                  </td>
              </tr>


              <!-- Modal Agregar Compra -->
<div class="modal fade" id="CompraModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-secondary">
        
        <img src="img/comlogo.png"  width="620px" height="75px">
        

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form>

          <!-- Seccion de datos del usuario y fecha con ID -->
          <div class="form-row">
           <div class="col-7">
              <input type="text" class="form-control" placeholder="Usuario">
           </div>
           <div class="col">
             <input type="text" class="form-control" placeholder="Fecha">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Id Compra">
            </div>
          </div>


          <!-- Seccion de ingreso de datos -->
          <div class="form-group row">
            <div class="col">
              <button class="btn btn-success"><i class="fas fa-plus"></i>Agregar Producto</button>
            </div>

            
          </div>

          <div class="form-group row">
                <div class="col-xs-12 col-sm-6">
                  <div class="input-group">
                    <input type="number" class="form-control input-lg" id="nuevoPrecioCompra" name="nuevoPrecioCompra" step="any" min="0" placeholder="Precio de compra" required>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                  <div class="input-group">
                    <input type="number" class="form-control input-lg" id="nuevoPrecioVenta" name="nuevoPrecioVenta" step="any" min="0" placeholder="Precio de venta" required>
                  </div>
          </div>
        </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary"><i class="far fa-save"></i> Guardar</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- area para colocar nuevo codigo -->

</body>
</html>