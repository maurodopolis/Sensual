<?php

include_once("settings/settings.inc.php");
$conexion = @mysql_connect(SQL_HOST, SQL_USER, SQL_PWD) or die(mysql_error());
$db = @mysql_select_db(SQL_DB, $conexion) or die(mysql_error());

if (isset($_GET['idusr'])) {
	$idus = $_GET['idusr'];
	$tipo = $_GET['tipo'];

	$sql1 = "UPDATE usuarios SET tipo = '$tipo' WHERE id = '$idus'";
	$usuarios = @mysql_query($sql1, $conexion);
}

if (isset($_GET['borraridusr'])) {
	$usr = $_GET['borraridusr'];

	$sql2 = "DELETE FROM usuarios WHERE id = $usr";  
	$usuarios   = @mysql_query($sql2, $conexion);
}

$sql        = "select id,tipo,nombre,usuario from usuarios";
$usuarios   = @mysql_query($sql, $conexion);
?>

<!doctype html>
<html>  
	  <body style="background: url(legofondo.jpg) no-repeat center center fixed;">		<head>
		<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<title>Editar Usuario</title>
	</head>
	  <center>
		<center>
      
        </center>
        <div class="panel panel-default">
        	<div class="panel-heading">Editar Usuario<span class="glyphicon glyphicon-pencil"></span></div>
		<table class="table"> 
          <?php
            while($usuario = @mysql_fetch_array($usuarios))
            {
            
            echo"<tr>";
          	    echo "<td><b><center>".$usuario['nombre']."</center></b></td>";
             	echo "<td><b><center>".$usuario['usuario']."</center></b></td>";
             	echo "<td><a href='usredit.php?idusr=".$usuario['id']."&tipo=1'>Administrador</a></td>";
             	echo "<td><a href='usredit.php?idusr=".$usuario['id']."&tipo=2'>Editor</a></td>";
             	echo "<td><a href='usredit.php?idusr=".$usuario['id']."&tipo=3'>Usuario</a></td>";
             	echo "<td><a href='usredit.php?borraridusr=".$usuario['id']."'>Borrar</a></td>";
             	echo "<td><b><center>".$usuario['tipo']."</center></b></td>";
	   		echo"</tr>";

	   	    } 

	   	  echo"<tr>";
	   	  echo"<td><a href ='index.php'>regresar</a></td>";
	   	  ?>
		
		</center>
		</table>

</div>
		</div>
	  </center>
	  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
	</body>
</html>

