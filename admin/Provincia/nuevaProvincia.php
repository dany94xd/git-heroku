<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset ="utf-8">
<title> Tabla Provincia </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="../../css/tablas.css" rel="stylesheet" >
</head>
<body>
<header>

</header>

<aside>
<?php

 echo "<nav class='navbar navbar-default'>";
 echo "<div class='container-fluid'>";
 echo "<div class='navbar-header'><a class='navbar-brand' >Provincia Creada</a></div>";
 echo "<ul class='nav navbar-nav'>";
 echo "<li><a href='../readsupremo.php'>Menú</a></li>";
 echo "<li><a href='createProvincia.php'>Nuevo</a></li>";
 echo "<li><a href='readProvincia.php'>Consulta</a></li>";
 echo "</ul>";
 echo "<ul class='nav navbar-nav navbar-right'>";
 echo "<li><a href='#'>Hola:(" . $_SESSION ['MiSession'] . ")</a></li>";
 echo "<li><a href='../salir.php''><span class='glyphicon glyphicon-log-in'></span> Salir</a></li>";
 echo "</ul>";
 echo "</div>";
 echo "</nav>";


$nombre = $_POST['nombre'];

include_once("ProvinciaCollector.php");
$ProvinciaCollectorObj = new ProvinciaCollector();
$ProvinciaCollectorObj->insertProvincia($nombre);

echo "<br>";
echo "<div class='container'>";
echo "<div class='panel panel-default'>";
echo "<div class='panel-heading'>Registro Ingresado Correctamente</div>";
echo "<div class='panel-body'>$nombre</div>";
echo "</div>";
echo "</div>";
?>

<div class="text-fieldsl">
  <a href='readProvincia.php'>Regresar</a>                                          
</div>

</aside>
</body>
</html>
