<?php
include 'conexion.php';
session_start();
if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT COUNT(*) AS contar FROM usuario WHERE user = '$username' and password = '$password'";
    $resultado = mysqli_query($con, $query);

    $parametros = mysqli_fetch_array($resultado);
    if ($parametros['contar'] > 0) {
        
        $_SESSION['username'] = $username;
        header("location: inicio.php");
    } else {
        header("location: index.php");
    }
}

if (!isset($_SESSION['username'])) {
    header("location: index.php");
}

if (isset($_POST['endSesion'])) {
    session_destroy();
    header("location: index.php");
}
?>