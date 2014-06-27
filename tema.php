<?php
if (isset($_POST['txttema'])) {
    $titulo = $_POST["txttema"];
    $contenido = $_POST["txtcontenido"];

    

include_once("settings/settings.inc.php"); 

$conexion = @mysql_connect(SQL_HOST, SQL_USER, SQL_PWD) or die(mysql_error());
$db = @mysql_select_db(SQL_DB, $conexion) or die(mysql_error());
$sql = "INSERT INTO temas(titulo,contenido,id_usuario) VALUES ('".$titulo."', '".$contenido."','1')";
$rs_temas = mysql_query($sql, $conexion) or die(mysql_error());
header("location:index.php");

}

?>

<!DOCTYPE html>
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

<title>Nuevo Tema</title>
	</head>
<body>
  
<center>
	<div class="container">
 <div class="alert alert-info">
	<form class="form-horizontal" role="form" action="tema.php" method="POST" name="tema"><br>
   
		<div><h2><center> Nuevo Tema <Span class="glyphicon glyphicon-file"> </span> </center><h2></div>

         <div class="form-group">
          <label for="txttema" class="col-sm-4 control-label">Titulo</label>
          <div class="col-sm-8">
		<input class="form-control" placeholder="Titulo" name="txttema" type="text"  id="txttema" value="" >
	</div>
</div>
         <div class="form-group">
          <label for="txtcontenido" class="col-sm-4 control-label">Contenido</label>
          <div class="col-sm-8">  
		
		  <textarea name="txtcontenido" type="text"  id="txtcontenido" value="" class="form-control" rows="3"></textarea>
           </div>
	   </div>
	
              <center> <button type ="submit"  class = "glyphicon glyphicon-send btn btn-primary"  > 
  <span  class = "glyphicon glyphicon estrellas" > </span> Publicar </span></button></center>
		
  </form>
</div>
</div>
 </center>
 
 
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>