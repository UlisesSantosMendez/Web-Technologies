<?php
include('conexion.php');

if(isset($_POST['guardar-datos'])){
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $asunto = $_POST['asunto'];
    $tipusuario = $_POST['tusuario'];
    $descripcionasunto = $_POST['dasunto'];

    $query = "INSERT INTO contacto (nombre, correo, asunto, tipo_usuario, descripcion_asunto) VALUES ('$nombre','$correo','$asunto','$tipusuario','$descripcionasunto')";
    $result = mysqli_query($conexion,$query);
    if(!$result){
        die("Query failed...");
    }
    ?>
    <?php
    sleep(3);
    header("Location: usuario-noregistrado-cto.php");
}

?>