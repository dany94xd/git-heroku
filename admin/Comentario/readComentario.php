<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Tabla Comentario </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link href="../css/tablas.css" rel="stylesheet" >
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
    echo "<div class='navbar-header'><a class='navbar-brand' >Tabla Categoria</a></div>";
    echo " <ul class='nav navbar-nav'>";
            echo "<li><a href='../readsupremo.php'>Menú</a></li>";
      echo "<li><a href='crearComentario.php'>Nuevo</a></li>";
    echo "</ul>";
    echo " <ul class='nav navbar-nav navbar-right'>";
    echo "<li><a href='#'>Hola Usuario : (" . $_SESSION ['MiSession'] . ")</a></li>";
    echo "<li><a href='../salir.php''><span class='glyphicon glyphicon-log-in'></span> Salir</a></li>";
    echo "</ul>";
    echo "</div>";
    echo "</nav>";

include_once("ComentarioCollector.php");
$ComentarioCollectorObj = new ComentarioCollector();

echo "<div class='container'>";
echo "<h2>Comentario</h2>";
echo "<div class='table-responsive'>"; 
echo "<table class='table'>"; 
echo "<thead>"; 
echo "<tr>"; 
echo " 	   <th>Código</th>"; 
echo "     <th>descripcion</th>";
echo "     <th>denuncia</th>";
echo "     <th>denunciante</th>";  
echo "</tr>"; 
echo "</thead>"; 

foreach ($ComentarioCollectorObj->showComentarios() as $c){

echo "<tbody>"; 
echo "<tr>"; 
echo "<td>".$c->getIdComentario()."</td>"; 
echo "<td>".$c->getDescripcion()."</td>";
echo "<td>".$c->getIdDenuncia()."</td>";
echo "<td>".$c->getIdDenunciante()."</td>";

    echo "<td><a href='updateComentario.php?id=".$c->getIdComentario()."&descripccion=".$c->getDescripcion()."'>Editar</a></td>"; 
	echo "<td><a href='deleteComentario.php?id=".$c->getIdComentario()."&descripccion=".$c->getDescripcion()."'>Eliminar</a></td>"; 
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