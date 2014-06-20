<?php
Echo "<center>";
  $mensaje = "Sean bienvenidos al igual que sus Lobukis...";
  if (isset($_GET["error"])) {
    $error =$_GET ["error"];
    if ($error <> " "){

      switch ($error) {
        case '1':
          $mensaje= "Este Mirey no existe";
          break;
        case '2':
          $mensaje= "Codigo incorrecto Mirey";
          break;  
        case '3':
          $mensaje= "Reinicie para socializar con las demas lobukis, Mirey";
          break;  
        case '4':
          $mensaje= "Se ha registrado Mirey, gozalo!";
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
<body>
  <center>
 <table border="1"> 
 
  <form action="validarlogin.php" method="post" name="login"><br>
   
    <tr><td><h2><center>Inicia tu sesion Mirey</center><h2></td></tr>     
    <tr><td><?php echo $mensaje; ?></td><tr> 
     <tr><td><label><center>Usuario: <input name="txtusuario" type="text"  id="txtusuario" value="" ></center></td></tr>
     <tr><td><label><center>Password: <input name="txtpassword" type="password" id="password"  value=""></center></td></tr>
     <tr><td><center><input type="submit" value="Entrar"> </td></tr>
   
  </form>
 
 </table>
 </center>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html
?>