      <?php
        session_start();
   include_once("settings/settings.inc.php");
        if (isset($_SESSION ['tipo'])) {
    $tipo = $_SESSION ['tipo'];
    $nombre = $_SESSION["nombre"];
    $log = $_SESSION['idusr'];
  }
  else
  {
    $tipo = 0;
    $nombre = "";
    $log = 0;
  }

        if (isset($_SESSION["nombre"])) {
            
         
          $nombre = $_SESSION["nombre"]; 
             
        }
        else
        {

          $nombre = "";        }


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
    <title>BLOG</title>
    <meta charset="UTF-8">
  </head>
  <body>
    <div class="container">
  <?php
        if (isset($_SESSION["nombre"])) {
            
             echo"<div  class='row'>";
             echo "<div  class='col-md-8'>";
          echo "<h1>Bienvenido a sus dominios Mirey " .$_SESSION["nombre"]."</h1>";
          echo "</div>";
          echo"<P ALIGN=right>";
           echo" <a href='usredit.php'> Editar usuarios- </a>";
          echo"<a href='cerrar.php'> Cerrar Sesion </a>"; 
             
        }
        else
        {
          echo "<div  class= 'row' >";
           echo"<div  class= 'col-md-6' >";  
          echo "<h1><p class='text-primary'>Bienvenido a sus dominios Mirey</p> </h1>";
           echo "</div>";
           echo"<div  class= 'col-md-4' >";  
         echo"<img src='rolex.png' alt='...' class='img-rounded'>";
          echo "</div>"; 
           echo"<div  class= 'col-md-2' >"; 
           echo"<a href='login.php'> Logueate Mirey </a><br>";

          echo"<a href='registrar.php'> Registrate Mirrey </a>";
          echo"</div>";
          echo"</div>";
      echo "</center>";        }


    
 

$conexion = @mysql_connect(SQL_HOST, SQL_USER, SQL_PWD) or die(mysql_error());
$db = @mysql_select_db(SQL_DB, $conexion) or die(mysql_error());
 

if (isset($_GET['idborra'])) {
  if ($tipo == 1) {
  $idborra = $_GET['idborra'];

  $sql = "DELETE FROM temas WHERE id=".$idborra;
  $rs_temas = mysql_query($sql, $conexion) or die(mysql_error());
}
}
 if (isset($_GET['ideliminarcom'])) {
    if ($tipo == 1) {
      $ideliminarcom = $_GET['ideliminarcom'];

      $conexion = @mysql_connect(SQL_HOST, SQL_USER, SQL_PWD) or die(mysql_error());
      $db = @mysql_select_db(SQL_DB, $conexion) or die(mysql_error());
      $sql      = "DELETE FROM comentarios WHERE id =".$ideliminarcom;
      $comentariodel  = @mysql_query($sql, $conexion); 

   }
   }

$sql      = "select temas.*, usuarios.nombre from temas, usuarios where temas.id_usuario = usuarios.id";
$temas    = @mysql_query($sql, $conexion);

echo"<center>";
echo "<table width='80%'>";
while ($tema = @mysql_fetch_array($temas))
{
    echo "<tr>";
      echo"<td colspan = '3'><h2>".$tema['titulo']."</h2></td>";
          echo "<td colspan = '3'>";
             if ($tipo=='1')
         
          echo" <a href='tema.php'> Publicar - </a>";
          if ($tipo>'0')
        echo" <a href='ccomentar.php?idtema=".$tema['id']."&idusr=".$log."'> Comentar- </a>";
               if ($tipo=='1' or $tipo == '2' )
          echo" <a href='editar.php'> Editar - </a>";
          if ($tipo=='1')
          echo" <a href='index.php?idborra=".$tema['id']."'> Eliminar </a>";
     
     echo "</tr>";
             
    echo "<tr>";
      echo "<td colspan = '5'>".$tema['fecha_pub']. " - " .$tema['nombre']."</td>";

    echo "</tr>";

    echo "<tr>";
      echo "<td></td>";
      echo "<td colspan= '4'>".$tema['contenido']."</td>";
    echo "</tr>";

    echo"<tr>";
      echo"<td colspan = '5'>";
        if ($tipo>'0')
      echo" <a href> Papawh! </a>";

    echo"</tr>";

    $sql1= "select comentarios.*, usuarios.nombre from comentarios, temas, usuarios " . 
        "where comentarios.id_usuarios = usuarios.id and comentarios.id_temas = temas.id and comentarios.id_temas =" . $tema['id'];
    $comentarios = mysql_query($sql1, $conexion);
    echo "<table width='80%'>";
    
    while ($comentario=@mysql_fetch_array($comentarios))
    {
        echo"<tr>";

          echo"<td colspan = '5'>" . $comentario['nombre'] . " - " . $comentario['fecha_pub']."</td>";
          echo "<td colspan = '3'>";
        
         
              if ($tipo=='1' or $tipo == '2' ) 
          echo" <a href='ceditar.php'> Editar </a>";
          if ($tipo=='1' or $tipo == '2' )
         echo" <a href='index.php?ideliminarcom=".$comentario['id']."'> Eliminar</a>";
        echo"</tr>";

        echo"<tr>";
          echo"<td colspan = '5'>" . $comentario['comentarios'] . "</td>";
        echo"</tr>";
    }

}
echo"</center>";
echo "</table>";

@mysql_close($conexion);

?>
</div>  <!-- container -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
