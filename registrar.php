<?php 
  $mensaje = "";
 
  if (isset($_POST['txtnombre'])) {
    $nombre = $_POST["txtnombre"];
    $usuario = $_POST["txtusuario"];
    $password = $_POST["txtpassword"];
    
    include_once("settings/settings.inc.php");
    $conexion = mysql_connect(SQL_HOST, SQL_USER, SQL_PWD);
    $db = mysql_select_db(SQL_DB, $conexion) or die(); 
    $sql_usuarios = "SELECT * FROM usuarios WHERE usuario = '" . $usuario ."'";
    $rs_usuarios = mysql_query($sql_usuarios, $conexion) or die(mysql_error());

    $total_usuarios = mysql_num_rows($rs_usuarios);
    if($total_usuarios==0) 
    {
      $sql = "INSERT INTO usuarios(nombre,usuario,password,tipo) VALUES ('".$nombre."', '".$usuario."', '".$password."','3')";
      $rs_usuario = mysql_query($sql, $conexion) or die(mysql_error());
      header("location:login.php?error=4");
    }
    else 
      $mensaje ="Este Mirey esta registrado";
  }
?>
<!DOCTYPE html>
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
</head>
<body>
        <div class="container">

 <div class="jumbotron "@brand-primary: #428bca;>
     <form class="form-horizontal" role="form" action="registrar.php" method="post" name="login"><br>
        
        <h2><?php echo $mensaje; ?><h2>     
        <h2><center>Registrate Mirey <span class="glyphicon glyphicon-credit-card"></span> </center></h2>
        <div class="form-group">
          <label for="txtnombre" class="col-sm-4 control-label">Nombre</label>
          <div class="col-sm-8">  
        <input class="form-control"placeholder="Nombre" name="txtnombre" type="text"  id="txtnombre" value="" >
      </div>
    </div>
          <div class="form-group">
          <label for="txtusuario" class="col-sm-4 control-label">Usuario</label>
            <div class="col-sm-8">  
         <input class="form-control"placeholder="Usuario" name="txtusuario" type="text"  id="txtusuario" value="" >
        </div>
      </div>

                   <div class="form-group">
          <label for="txtusuario" class="col-sm-4 control-label">Contraseña</label>
            <div class="col-sm-8"> 
        <input class="form-control"placeholder="Contraseña" name="txtpassword" type="password" id="txtpassword"  value="">
     </div>
      </div>
         <center> <button type="submit" class="btn btn-primary">Crear</button>  </center>
       
   

    </form>
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
    </body>
    <html>
