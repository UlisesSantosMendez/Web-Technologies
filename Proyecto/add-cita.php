<?php
include('conexion.php');

if(isset($_POST['guardar-datos'])){
    $fecha_cita = $_POST['fecha_cita'];

    $query = "INSERT INTO citas (fecha_cita) VALUES ('$fecha_cita')";
    $result = mysqli_query($conexion,$query);
    if(!$result){
        die("Query failed...");
    }
    ?>
    <?php
    sleep(3);
    header("Location: usuario-alumno-soporte.php");
}

?>