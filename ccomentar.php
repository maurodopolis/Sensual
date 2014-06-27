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
  <div class="container">

 <div class="alert alert-info">
	<form class="form-horizontal" role="form" action="ccomentar.php" method="POST" name="comentar">
         <center>
		<h2>Comentar  <span class="glyphicon glyphicon-comment"></span> </h2>	 
		 </center>
		 	<input type="hidden" name="idtema" value="<?php echo "$idtema"; ?>">
		 	<input type="hidden" name="idusr" value="<?php echo "$idusr"; ?>">
		 	<div class="form-group">
          <label for="txtusuario" class="col-sm-1 control-label"></label>
          <div class="col-sm-11">
         <textarea name="txtcomentario" type="text"  id="txtcomentario" value="" class="form-control" rows="3"></textarea>
           </div>
       </div>

		<center><button type="submit" class="btn btn-primary">Comentar</button></center>
    	 
	 
  </form>
 </div>
 
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>