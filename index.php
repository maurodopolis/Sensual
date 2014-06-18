<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
  <head>
    <title>Blog</title>

    <meta charset="UTF-8">

  </head>

    <center>
      <?php
        session_start();
        if (isset($_SESSION["nombre"])) {


          echo "<h1>¡Bienvenido a mi Blog! " .$_SESSION["nombre"]."</h1>";
          echo"<P ALIGN=right>";
        
          echo"<a href='cerrar.php'> Cerrar Sesion </a>"; 

        }
        else
        {
          echo "<h1>¡Bienvenido a mi Blog!</h1>";

          echo"<P ALIGN=right>";
        
           echo"<a href='login.php'> LOGEARSE </a><br>";


          echo"<a href='usuarios.php'>REGISTRARSE</a>";
          
                 
              


        }
      ?>
      </center>
     
  


<?php

include_once("settings/settings.inc.php"); 

$conexion = @mysql_connect(SQL_HOST, SQL_USER, SQL_PWD) or die(mysql_error());
$db = @mysql_select_db(SQL_DB, $conexion) or die(mysql_error());
$sql      = "select temas.*, usuarios.nombre from temas, usuarios where temas.id_usuario = usuarios.id";
$temas    = @mysql_query($sql, $conexion);

echo"<center>";
echo "<table width='80%'>";
while ($tema = @mysql_fetch_array($temas))
{

    echo "<tr>";
      echo"<td colspan = '3'><h2>".$tema['titulo']."</h2></td>";
      echo"<td><button>Comentar</button><button>Editar</button><button>Borrar</button></td>";      
      
      
    echo "</tr>";
             
    echo "<tr>";
      echo "<td colspan = '5'>".$tema['fecha_pub']. " - " .$tema['nombre']."</td>";

    echo "</tr>";

    echo "<tr>";
      echo "<td> >>> </td>";
      echo "<td colspan= '4'>".$tema['contenido']."</td>";
    echo "</tr>";

    echo"<tr>";
      echo"<td colspan = '5'><button>Like</button></td>";
    echo"</tr>";

    $sql1        = "select comentarios.*, usuarios.nombre from comentarios, temas, usuarios " . 
        "where comentarios.id_usuario = usuarios.id and comentarios.id_tema = temas.id and comentarios.id_tema =" . $tema['id'];
    $comentarios = mysql_query($sql1, $conexion);
    echo "<table width='80%'>";
    
    while ($comentario=@mysql_fetch_array($comentarios))
    {
        echo"<tr>";
          echo"<td colspan = '5'>" . $comentario['nombre'] . " - " . $comentario['fecha_pub']."</td>";
         echo"</tr>";

        echo"<tr>";  
          echo"<td><button>Editar</button></td>";
          echo"<td><button>Borrar</button></td>";
        echo"</tr>";

        echo"<tr>";
          echo"<td colspan = '5'>" . $comentario['comentario'] . "</td>";
        echo"</tr>";
    }
}
echo"</center>";
echo "</table>";

@mysql_close($conexion);

?>
</html> 
