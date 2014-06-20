<?php
if (isset($_GET['idtema'])) {
	$idtema= $_GET['idtema'];
    $idusr= $_GET['idusr'];
}

if (isset($_POST['txtcomentario'])) {
    $comentario= $_POST["txtcomentario"];
    $idtema= $_POST['idtema'];
    $idusr= $_POST['idusr'];
  

include_once("settings/settings.inc.php"); 

$conexion = @mysql_connect(SQL_HOST, SQL_USER, SQL_PWD) or die(mysql_error());
$db = @mysql_select_db(SQL_DB, $conexion) or die(mysql_error());
$sql = "INSERT INTO comentarios (comentarios,id_temas,id_usuarios) VALUES ('".$comentario."', '".$idtema."','".$idusr."')";
$rs_comentarios = mysql_query($sql, $conexion) or die(mysql_error());
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
<title>Comentario</title>
	</head>
<body>
  <center>
 <table border="1"> 
 
	<form action="ccomentar.php" method="POST" name="comentar"><br>
   
		<tr><td><h2>Comentar<h2></td></tr> 		 
		 <tr><td>
		 	<input type="hidden" name="idtema" value="<?php echo "$idtema"; ?>">
		 	<input type="hidden" name="idusr" value="<?php echo "$idusr"; ?>">
		 	<tr><td><label>Comentar:<input name="txtcomentario" type="text"  id="txtcomentario" value="" ></td></tr>
		 </td></tr>
		 <tr><td><center><input type="submit" value="Comentar"></center></td></tr>
		 
	 
  </form>
 
 </table>
 </center>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>