<?php
include 'conexion.php';

$id = $_POST["id"] ?? "";


try {
    $sql = "DELETE FROM `registro_aportes` WHERE `registro_aportes`.`id` = '$id'";
    $resultado = mysqli_query($con, $sql);
    if ($resultado) {
?>
        <script>
            window.location.assign("consulta_usuario.php")
        </script>
<?php
    }
} catch (\Throwable $th) {
    echo $th;
}
