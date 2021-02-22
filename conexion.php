<?php
$con = mysqli_connect("127.0.0.1", "root", "", "bd_nuevoecu");

if (!$con) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}


//echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos bd_nuevoecu es genial." . PHP_EOL . "<br>";
//echo "Información del host: " . mysqli_get_host_info($con) . PHP_EOL;

//mysqli_close($con);
?>