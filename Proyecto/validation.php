<?php
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$tipo_usuario = $_POST['tipo_usuario'];
session_start();
$_SESSION['usuario'] = $usuario;
include('conexion.php');

$consulta = "SELECT*FROM usuarios where usuario = '$usuario' and contrasena = '$contrasena' and tipo_usuario = '$tipo_usuario'";
$result = mysqli_query($conexion,$consulta);
$rows = mysqli_num_rows($result);

if($rows){
    if($tipo_usuario == "Alumno"){
        include("usuario-noregistrado.php");
        header("location:usuario-alumno.php?id=$usuario");
        ?>
        <?php
        include("usuario-noregistrado.php");
        echo "Mensaje no guardado";
        ?>
        <script>
            alert('Usuario y/o contraseña inválidos. ¡Intente de nuevo!')
        </script>    
        <?php
    }elseif($tipo_usuario == "Administrador"){
        include("usuario-noregistrado.php");
        header("location:usuario-administrador.php?id=$usuario");
        ?>
        <?php
        include("usuario-noregistrado.php");
        echo "Mensaje no guardado";
        ?>
        <script>
            alert('Usuario y/o contraseña inválidos. ¡Intente de nuevo!')
        </script>    
        <?php
    }elseif($tipo_usuario == "Profesor"){
        include("usuario-noregistrado.php");
        header("location:usuario-maestro.php?id=$usuario");
        ?>
        <?php
        include("usuario-noregistrado.php");
        echo "Mensaje no guardado";
        ?>
        <script>
            alert('Usuario y/o contraseña inválidos. ¡Intente de nuevo!')
        </script>    
        <?php
    }
    
}else{
            ?>
            <?php
            include("usuario-noregistrado.php");
            ?>
            <script>
                alert('Usuario y/o contraseña inválidos. ¡Intente de nuevo!')
            </script>    
            <?php
        }
mysqli_free_result($result);
mysqli_close($conexion);
?>


