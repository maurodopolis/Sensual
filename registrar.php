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
     <form action="registrar.php" method="post" name="login"><br>
    <center>
  <table border="2">
        <tr><td><h2><?php echo $mensaje; ?><h2></td></tr>     
        <tr><td><h2><center>Registrate Mirey</center><h2></td></tr>    
        <tr><td><label>Nombre: <input name="txtnombre" type="text"  id="txtnombre" value="" ></td></tr>
        <tr><td><label>Usuario: <input name="txtusuario" type="text"  id="txtusuario" value="" ></td></tr>
        <tr><td><label>Password: <input name="txtpassword" type="password" id="txtpassword"  value=""></td></tr>
        <tr><td><center><input type="submit" value="Crear"></center></td></tr>   
    </center>
  </table>
    </form>