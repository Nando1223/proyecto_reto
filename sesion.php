<?php
session_start();
include 'conexion.php';

if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT COUNT(*) AS contar FROM usuario WHERE nombre = '$username' and password = '$clave' ";
    $resultado = mysqli_query($con, $query);
} else {
    # code...
}



require 'conexion.php';
$user = $_POST['usuario'];
$clave = $_POST['clave'];


$bdconect = mysqli_query($conectar, $query);
$parametros = mysqli_fetch_array($bdconect);
if($parametros['contar']>0){
	$_SESSION['username'] = $user;
	header("location: index.php");
}else{
	echo "<h1>No eres Don Cede</h1> <br>";
	echo "<a href='login.php' class='btn btn-warning'>Volver</a>";

}

?>