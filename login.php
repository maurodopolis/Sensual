<?php
Echo "<center>";
  $mensaje = "Sean bienvenidos al igual que sus Lobukis...";
  if (isset($_GET["error"])) {
    $error =$_GET ["error"];
    if ($error <> " "){

      switch ($error) {
        case '1':
          $mensaje= "<div class='alert alert-danger'>Este Mirey no existe</div>";
          break;
        case '2':
          $mensaje= "<div class='alert alert-danger'>Codigo incorrecto Mirey</div>";
          break;  
        case '3':
          $mensaje= "<div class='alert alert-info'>Reinicie para socializar con las demas lobukis, Mirey</div>";
          break;  
        case '4':
          $mensaje= "<div class='alert alert-success'>Se ha registrado Mirey, gozalo!";
          break;  
          
      }
    }
  } else {
    $error ="";
  }
 ?>

<doctype html>
<html>
  <head>
    <meta charset="UTF-8"
    <!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<title>MireyBook-Iniciar Sesion.</title>
  </head>
  <body style="background: url(legofondo.jpg) no-repeat center center fixed;">
<div class="container">
 
 

  <div class="container">
 <div class="jumbotron">
    
  <form class="form-horizontal" role="form" action="validarlogin.php" method="post" name="login">
   <div class="form-group">
    <div><h2><center>Inicia tu sesion Mirey</center><h2></div>   
    
    <div><?php echo $mensaje; ?></div>
    
      
          <div class="form-group">
          <label for="txtusuario" class="col-sm-4 control-label">Usuario</label>
          <div class="col-sm-8">
          <input name="txtusuario" class="form-control" type="text" placeholder="Usuario" id="txtusuario" value="" >
          </div>
          </div> 
      
         <div class="form-group">
         <label for="txtpassword" class="col-sm-4 control-label">Contraseña</label>
          <div class="col-sm-8">
         <input name="txtpassword" placeholder="Contraseña" class="form-control" type="password" id="password"  value="">
         </div>
        </div>
         <button type="submit" class="btn btn-primary">Entrar</button>
    
   
  </form>
 </div>


 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html
?>