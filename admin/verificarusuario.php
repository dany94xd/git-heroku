<?php


//AQUI CONECTAMOS A LA BASE DE DATOS DE POSTGRES

//$conex = "host=localhost port=5432 dbname=prueba1 user=postgres password=postgres";
$conex = "host=ec2-54-243-255-57.compute-1.amazonaws.com port=5432 dbname=d2od3dbfrmf7pe user=dgugoawgtwemle password=5994a70a765304f61016c686267cb3abf82052945eb6269e8fa7896ac30b3867";
//$user="obihwaohfkvyyt password=ea5858855a8a07277db5887f17e8080c0467704a2ec10342e726c561461b5352";
$cnx = pg_connect($conex) or die ("<h1>Error de conexion.</h1> ". pg_last_error());
session_start();

function quitar($mensaje)
{
$nopermitidos = array("'",'\\','<','>',"\"");
$mensaje = str_replace($nopermitidos, "", $mensaje);
return $mensaje;
}
if(trim($_POST["usuario"]) != "" && trim($_POST["contrasenia"]) != "")
{
// Puedes utilizar la funcion para eliminar algun caracter en especifico
//$usuario = strtolower(quitar($HTTP_POST_VARS["usuario"]));
//$password = $HTTP_POST_VARS["password"];
// o puedes convertir los a su entidad HTML aplicable con htmlentities
$usuario = strtolower(htmlentities($_POST['usuario'], ENT_QUOTES));
$password = $_POST["contrasenia"];
$result = pg_query('SELECT usuario.contrasenia, usuario.usuario, usuario.tipousuario FROM public.usuario WHERE usuario.usuario=\''.$usuario.'\'');
if($row = pg_fetch_array($result)){
  if($row['contrasenia'] == $password){
   $_SESSION['MiSession'] = $row['usuario'];
 if($row['tipousuario'] == 1){
	header("location: login.php");
 }else{
	header("location: ../index2.php");
 }
	
	
   //echo 'Has sido logueado correctamente '.$_SESSION['k_username'].' <p>';
   //echo '<a href="index.php">Index</a></p>';
   //Elimina el siguiente comentario si quieres que re-dirigir automáticamente a index.php
   /*Ingreso exitoso, ahora sera dirigido a la pagina principal.
   <SCRIPT LANGUAGE="javascript">
   location.href = "index.php";
   </SCRIPT>*/
  }else{
   echo 'Password incorrecto';
	echo '<script>window.location.href = "index.php";</script>';	
  }
 }else{
  echo 'Usuario no existente en la base de datos';
	echo '<script>window.location.href = "index.php";</script>';
 }
 pg_free_result($result);
}else{
 echo 'Debe especificar un usuario y password';
}
pg_close();
?>