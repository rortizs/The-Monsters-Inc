<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SANATORIO SERVIMEDI | SISTEMA VENTAS</title>
    <link rel="stylesheet" href="../files/dist/css/stylelog.css">
    <script src="https://kit.fontawesome.com/7e73ebaf62.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <link rel="icon" type="image/png" href="../files/dist/img/logo.png" style="max-width:100%;width:100px;height:auto; text-align:left;" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

  </head>
  <body>

      <form action="../modelos/validar.php" method="post" class="login-form">
        
        <div class="bottom-text">
         <img src="../files/dist/img/logo2.png" style="max-width:85%;width:auto;height:auto; text-align:center;">
        </div>
        <div class="txtb">
          <input type="text" name="usuario">
          <span data-placeholder="Usuario"></span>
        </div>

        <div class="txtb">
          <input type="password" name="password">
          <span data-placeholder="Constaseña"></span>
        </div>

        <button type="submit" class="logbtn" value="Iniciar sesión">
            <i class="fas fa-sign-in-alt"></i>
            Iniciar sesión
        </button>
      </form>

      <script type="text/javascript">
      $(".txtb input").on("focus",function(){
        $(this).addClass("focus");
      });

      $(".txtb input").on("blur",function(){
        if($(this).val() == "")
        $(this).removeClass("focus");
      });

      </script>


  </body>
</html>
