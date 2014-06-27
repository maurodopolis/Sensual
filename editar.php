   <?php
   if (isset($_GET['ideditar'])) {
	$ideditar= $_GET['ideditar'];
   
}
   include_once("settings/settings.inc.php");
$conexion = @mysql_connect(SQL_HOST, SQL_USER, SQL_PWD) or die(mysql_error());
$db = @mysql_select_db(SQL_DB, $conexion) or die(mysql_error());






 $sql        = "select titulo,contenido from temas";
$temas   = @mysql_query($sql, $conexion);
$tema = @mysql_fetch_array ($temas)
?>

<!doctype html>
<html>  
	<body> 

	  <center>
		<form name= "tituloed" action="editar.php" method="POST" name="admin">
			<input type="hidden" name="idtema" value= "$ideditar">
			
		<center>
          <h1>EDITAR TEMA </h1>
        </center>
		<TABLE  CELLSPACING="18" WIDTH="150">  
          <?php

            echo"<tr>";      
            echo"<td>";echo"Titulo<input name='titulo' type='text'  id='titulo' value='".$tema['titulo']."'"; echo "</td>";
            echo"<td>";echo"Contenido<input name='contenido' type='text'  id='contenido value='".$tema['contenido']."'"; echo"</td>";
            echo"</tr>";
	   	     
	   	     
?>

		</center>
		</table>
		</form>
	  </center>
	</body>
</html>