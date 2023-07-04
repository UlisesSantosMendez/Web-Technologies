<?php
include('conexion.php');

if(isset($_POST['guardar-datos'])){
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $tipo_usuario = $_POST['tipo_usuario'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $query = "INSERT INTO usuarios (nombre, usuario, tipo_usuario, correo, contrasena) VALUES ('$nombre','$usuario','$tipo_usuario','$correo','$contrasena')";
    $result = mysqli_query($conexion,$query);
    if(!$result){
        die("Query failed...");
    }
    ?>
    <?php
    sleep(3);
    header("Location: usuario-noregistrado.php");
}

?>