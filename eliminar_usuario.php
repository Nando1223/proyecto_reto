<?php 
include 'conexion.php';

$id = $_POST["id"] ?? "";


try {
    $sql = "DELETE FROM `persona` WHERE `persona`.`id` = '$id'";
    $resultado = mysqli_query($con, $sql);
    if($resultado){
        ?>

            
        <script> window.location.assign("consulta_user.php")</script>
        <?php
    }
} catch (\Throwable $th) {
    echo $th;
}