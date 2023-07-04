<?php
session_start();
include('conexion.php');
if(isset($_GET['id'])){
    $usuario = $_GET['id'];
    $query = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
    $result = mysqli_query($conexion,$query);
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result);
        $nombre = $row['nombre'];
        $user = $row['usuario'];
        $id = $row['id_usuario'];
        $tipo_usuario = $row['tipo_usuario'];
    }
}
if(isset($_SESSION['usuario'])):
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Usuario maestro</title>
    <link rel="stylesheet" href="/project/css/main.css" type="text/css" />
</head>

<body>
    <header>
        <img class="logo" src="/project/src/logo.png" alt="logo" />
        <h1>Sistema de Gestión Escolar</h1>
    </header>
    <nav>
        <ul class="nav">
            <li><a href="#" style="background-color: blue;">Gestionar</a>
                <ul>
                    <li><a href="/project/usuario-maestro-grupo.php">Grupo</a></li>
                    <li><a href="/project/usuario-maestro-alumnos.php">Alumno</a></li>
                </ul>
            </li>
            <li><a href="">Gestionar temas</a>
                <ul>
                    <li><a href="" class="inactive">Tipo de material</a></li>
                    <li><a href="">Video</a></li>
                    <li><a href="">Material para imprimir</a></li>
                    <li><a href="">Actividad en línea</a></li>
                    <li><a href="">Examen o evaluación</a></li>
                    <li><a href="" class="inactive">Seleccionar bloque</a></li>
                    <li><a href="">Bloque 1</a>
                        <ul>
                            <li><a href="">Decenas</a></li>
                            <li><a href="">Configuraciones geométricas</a></li>
                        </ul>
                    </li>
                    <li><a href="">Bloque 2</a>
                        <li><a href="">Bloque 3</a>
                </ul>
                </li>
                <li><a href="">Actualización de perfil</a>
                    <ul>
                        <li><a href="">Foto</a></li>
                        <li><a href="">Datos personales</a></li>
                    </ul>
                </li>
                <li><a href="">Contraseña</a></li>
                <li><a href="">Ayuda</a></li>
        </ul>
    </nav>
    <section name="area-desplegar">
        <h2>¡Bienvenida(o) profesora(or)!</h2>

        
    </section>
    <aside>
        <h2>Inicio de sesión</h2>
        <form action="" class="login-form">
            <label for="">Usuario:</label>
            <input type="email" disabled>
            <label for="">Contraseña:</label>
            <input type="email" disabled>
            <button type="submit" class="inactive" disabled>Iniciar sesión</button>

            <!-- <a href="#">Registrarse</a>
            <a href="#">Recuperar contraseña</a> -->
            <p style="margin-top: 7rem;"><b>
            <?php
            date_default_timezone_set('America/Mexico_City');
            $DateAndTime = date('m-d-Y h:i:s a', time());  
            echo  $DateAndTime;
            ?></b>
            </p>
            <a href="/project/cerrar_sesion.php">Cerrar sesión</a>
        </form>
    </aside>
    <footer>
        <h4>Copyright © 2021 Equipo 3 | Todos los derechos reservados.</h4>
        <h4>equipo3_tecweb@mail.com</h4>
    </footer>
</body>

</html>

<?php else: ?>
<script LANGUAGE="javascript">   location.href = "usuario-noregistrado.php";   </script>
<?php endif; ?>