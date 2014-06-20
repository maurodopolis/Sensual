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
	<body> 
	  <center>
		<center>
          <h1><font color="black">CAMBIO DE USUARIO</font></h1>
        </center>
		<TABLE BORDER="0" CELLSPACING="18" WIDTH="150">  
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
	  </center>
	  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
	</body>
</html>

