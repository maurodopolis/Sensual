
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
<head>
		<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<title>Editar Tema</title>
	</head> 
	  <body style="background: url(legofondo.jpg) no-repeat center center fixed;"> 
		 <div class="container">

	  <center>
 <div class="alert alert-info">

		<form class="form-horizontal" role="form" name= "tituloed" action="editar.php" method="POST" name="admin">
			
			<input type="hidden" name="idtema" value= "$ideditar">
			
		<center>
          <h1>EDITAR TEMA </h1>
        </center>
		
          <?php
              echo"<div>"; 
             echo"<div class='form-group'>";
          echo"<label for='txtcontenido' class='col-sm-4 control-label'>Titulo</label>";
          echo"<div class='col-sm-8'>";     
            echo"<input class='form-control' name='titulo' type='text'  id='titulo' value='".$tema['titulo']."'"; 
             echo"</div>"; 
            echo"</div>"; 
           echo"</div>"; 
            echo"<div>";
            echo"<div class='form-group'>";
          echo"<label for='contenido' class='col-sm-4 control-label'>Contenido</label>";
          echo"<div class='col-sm-8'>"; 
            echo"<textarea name='contenido' type='text' class='form-control' rows='3' id='contenido' value='".$tema['contenido']."'"; 
            echo"</textarea>";
             echo"</div>"; 
              echo"</div>"; 
              echo"</div>"; 
	   	     
?>

		</center>
	    </form>
		</form>
	  </center>
	</div>
	  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
	</body>
</html>