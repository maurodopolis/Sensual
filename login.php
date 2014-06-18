<?php
  $mensaje = " Bienvenido! ";
  if (isset($_GET["error"])) {
  	$error =$_GET ["error"];
  	if ($error <> " "){

  		switch ($error) {
  			case '1':
  				$mensaje= "El usuario no existe!";
  				break;
  			case '2':
  				$mensaje= "La contrase&ntilde;a no existe!";
  				break;	
  			case '3':
  				$mensaje= "Debe logearse para poder entrar!";
  				break;	
  			case '4':
  				$mensaje= "Se ha registrado, gracias. Ahora debe entar !";
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
<title>Inicio de sesion</title>
	</head>
<body>
  <center>
 <table border="1"> 
 
	<form action="validarlogin.php" method="post" name="login"><br>
   
		<tr><td><h2>Inicio de Sesion<h2></td></tr> 		
		<tr><td><?php echo $mensaje; ?></td><tr> 
		 <tr><td><label>usuario<input name="txtusuario" type="text"  id="txtusuario" value="" ></td></tr>
		 <tr><td><label>password<input name="txtpass" type="password" id="password"  value=""></td></tr>
		 <tr><td><input type="submit" value="Enviar"> </td></tr>
	 
  </form>
 
 </table>
 </center>
</body>
</html
?>