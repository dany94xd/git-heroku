<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset ="utf-8">
    <title> Tabla Tipo Autoridad </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link href="../../css/tablas.css" rel="stylesheet" >
  </head>
<body>
<header>

</header>
<section>
</section>
<section>

</section>
<aside>
<?php

 echo "<nav class='navbar navbar-default'>";
    echo "<div class='container-fluid'>";
    echo "<div class='navbar-header'><a class='navbar-brand' >Tabla Tipo Autoridad</a></div>";
    echo " <ul class='nav navbar-nav'>";
            echo "<li><a href='../readsupremo.php'>Menú</a></li>";
      echo "<li><a href='crearTipoAutoridad.php'>Nuevo</a></li>";
    echo "</ul>";
    echo " <ul class='nav navbar-nav navbar-right'>";
    echo "<li><a href='#'>Hola Usuario : (" . $_SESSION ['MiSession'] . ")</a></li>";
    echo "<li><a href='../salir.php''><span class='glyphicon glyphicon-log-in'></span> Salir</a></li>";
    echo "</ul>";
    echo "</div>";
    echo "</nav>";

include_once("TipoAutoridadCollector.php");
$TipoAutoridadCollectorObj = new TipoAutoridadCollector();

echo "<div class='container'>";
echo "<h2>Tipo Autoridad</h2>";
echo "<div class='table-responsive'>"; 
echo "<table class='table'>"; 
echo "<thead>"; 
echo "<tr>"; 
echo "     <th>Código</th>"; 
echo "     <th>Nombre</th>";  
echo "</tr>"; 
echo "</thead>"; 

foreach ($TipoAutoridadCollectorObj -> showTiposAutoridades() as $c){

echo "<tbody>"; 
echo "<tr>"; 
echo "<td>".$c->getIdTipoAutoridad()."</td>"; 
echo "<td>".$c->getNombre()."</td>";

    echo "<td><a href='updateTipoAutoridad.php?id=".$c->getIdTipoAutoridad()."&nombre=".$c->getNombre()."'>Editar</a></td>"; 
  echo "<td><a href='deleteTipoAutoridad.php?id=".$c->getIdTipoAutoridad()."&nombre=".$c->getNombre()."'>Eliminar</a></td>"; 
  echo "</tr>"; 


}
echo "</tbody>";
echo "</table>";
echo "</div>";
echo "</div>";

?>
</aside>
</body>
</html>