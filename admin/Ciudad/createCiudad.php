<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset ="utf-8">
<title>Tabla Ciudad</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="../../css/tablas.css" rel="stylesheet" ></head>
<body>
<header>

</header>

<aside>
<?php
include_once("../Provincia/ProvinciaCollector.php"); //llamar el collector de la otra tabla
$ProvinciaCollectorObj = new ProvinciaCollector(); 

 echo "<nav class='navbar navbar-default'>";
 echo "<div class='container-fluid'>";
 echo "<div class='navbar-header'><a class='navbar-brand' >Crear Ciudad</a></div>";
 echo " <ul class='nav navbar-nav'>";
 echo "<li><a href='../readsupremo.php'>Menú</a></li>";
 echo "<li><a href='createCiudad.php'>Nuevo</a></li>";
 echo "</ul>";
 echo " <ul class='nav navbar-nav navbar-right'>";
 echo "<li><a href='#'>Hola: (" . $_SESSION ['MiSession'] . ")</a></li>";
 echo "<li><a href='../salir.php''><span class='glyphicon glyphicon-log-in'></span> Salir</a></li>";
 echo "</ul>";
 echo "</div>";
 echo "</nav>";
 echo "<form method= 'POST' class='form-horizontal' action= 'nuevaCiudad.php' id='ciudad' title='Ciudad'>";
     echo "<div class='form-group'>";
         echo "<label for='inputName' class='control-label col-xs-2'>Nombre:</label>";
         echo "<div class='col-xs-10'>";
             echo "<input name='nombre' type='text' id= 'nombre' class='form-control' placeholder='Nombre'>";
         echo "</div>";
     echo "</div>";

echo "<div class='form-group'>";
      

echo "<label for='inputName' class='control-label col-xs-2'>Provincia:</label>";
         echo "<div class='col-xs-10'>";
             echo "<select name='idprovincia'  id= 'idprovincia' class='form-control' required>";
		echo "<option selected></option>";
foreach ($ProvinciaCollectorObj->showProvincias() as $c){
echo "<option value='".$c->getIdProvincia()."'>".$c->getNombre()."</option>"; 
}

	     echo "</select> ";
         echo "</div>";
     echo "</div>";


     echo "<div class='form-group'>";
         echo "<div class='col-xs-offset-2 col-xs-10'>";
             echo "<button type='submit' class='btn btn-primary'>Grabar</button>";            
         echo "</div>";
     echo "</div>";
echo "</form>";
 
?>

<div class="text-fieldsl">
  <a href='readCiudad.php'>Regresar</a>                                          
</div>



</aside>
</body>
</html>
