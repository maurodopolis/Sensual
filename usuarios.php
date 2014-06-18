<?php 
  $mensaje = "";
 

  if (isset($_POST['txtnombre'])) {
    $nombre = $_POST["txtnombre"];
    $usuario = $_POST["txtusuario"];
    $password = $_POST["txtpass"];
    

    include_once("settings/settings.inc.php");
    $conexion = mysql_connect(SQL_HOST, SQL_USER, SQL_PWD);
    $db = mysql_select_db(SQL_DB, $conexion) or die();

    // ver repetido 
    $sql_usuarios = "SELECT * FROM usuarios WHERE usuario = '" . $usuario ."'";
    $rs_usuarios = mysql_query($sql_usuarios, $conexion) or die(mysql_error());

    $total_usuarios = mysql_num_rows($rs_usuarios);
    if($total_usuarios==0) 
    {
      // insertar
      $sql = "INSERT INTO usuarios(nombre,usuario,password) VALUES ('".$nombre."', '".$usuario."', '".$password."')";
      $rs_usuario = mysql_query($sql, $conexion) or die(mysql_error());
      header("location:login.php?error=4");
    }
    else 
      $mensaje ="El usuario ya existe";
  }
 
  
?>


<!DOCTYPE html>

  <center>
     <form action="usuarios.php" method="post" name="login"><br>
  <table border="2">
     
        <tr><td><h2><?php echo $mensaje; ?><h2></td></tr>     
        <tr><td><h2>LOGUEARSE<h2></td></tr>     
        <tr><td><label>Nombre<input name="txtnombre" type="text"  id="txtnombre" value="" ></td></tr>
        <tr><td><label>Usuario<input name="txtusuario" type="text"  id="txtusuario" value="" ></td></tr>
        <tr><td><label>Password<input name="txtpass" type="password" id="password"  value=""></td></tr>
        <tr><td><input type="submit" value="Guardar"> </td></tr>
    
   
  </table>
    </form>