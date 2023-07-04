<?php
if(!empty($_POST)){
    $alert='';
    if(empty($_POST['nombre']) || empty($_POST['usuario']) || empty($_POST['tipo_usuario'])
     ||  empty($_POST['correo']) ||  empty($_POST['contrasena']))
     {
         $alert='<p class="msg_error" >Todos los campos son obligatorios </p>';
     }
     else{
        include('conexion.php');
        $nombre = $_POST['nombre'];
        $usuario = $_POST['usuario'];
        $tipo_usuario = $_POST['tipo_usuario'];
        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];
        $consulta =mysqli_query($conexion,"SELECT *FROM usuarios WHERE usuario = '$usuario' or correo = '$correo'");
        $result = mysqli_fetch_array($consulta);
        
        if($result > 0 ){
            $alert='<p class="msg_error" >El correo o el usuario ya existe. </p>';
        }
        else{
            $query_insert = "INSERT INTO usuarios (nombre, usuario, tipo_usuario, correo, contrasena) VALUES ('$nombre','$usuario','$tipo_usuario','$correo','$contrasena')";
            $result_insert = mysqli_query($conexion,$query_insert);
            if($result_insert){
                $alert='<p class="msg_save" >Usuario creado correctamente. </p>';
            }
            else{
                $alert='<p class="msg_error" >Error al crear usuario. </p>';
            }
        }
        
     }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuario</title>
    <link rel="stylesheet" href="/project/css/main.css" type="text/css"/>
</head>
<body class="fondo-registro">
    <div class="registro">
    <form action="" method="POST" class="form-registro">
        <img src="/project/src/logo.png" width="160px" height="100px" alt="">
        <label for="">Nombre completo:</label>
        <input type="text" name="nombre" required>
        <label for="">Usuario:</label>
        <input type="text" name="usuario" required>
        <label for="">Tipo de usuario:</label>
        <select name="tipo_usuario" id="tipo_usuario" required>
            <option value="Administrador">Administrador</option>
            <option value="Alumno" selected>Alumno</option>
            <option value="Profesor">Profesor</option>
        </select>
        <label for="">Correo electrónico:</label>
        <input type="email" name="correo" required>
        <label for="">Contraseña:</label>
        <input type="password" name="contrasena">
        <input type="submit" value="Crear usuario" class="enviar-datos">
        <div class="alert"><?php echo isset ($alert) ? $alert : ''; ?></div>
    </form>
    </div>
</body>
</html>