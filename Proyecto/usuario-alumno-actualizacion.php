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
        $correo = $row['correo'];
        $contrasena = $row['contrasena'];
    }
    if(isset($_POST['update'])){
        $id = $_GET['id'];
        $nombre = $_POST['nombre'];
        $usuario = $_POST['usuario'];
        $tipo_usuario = $_POST['tipo_usuario'];
        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];

        $query = "UPDATE usuarios set nombre = '$nombre', usuario = '$usuario', tipo_usuario = '$tipo_usuario', correo = '$correo', contrasena = '$contrasena'";
        mysqli_query($conexion,$query);
        header("Location: usuario-alumno.php");
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
    <title>Usuario alumno</title>
    <link rel="stylesheet" href="/project/css/main-alumno.css" type="text/css" />
</head>

<body>
    <header>
    <img class="logo"
            src="/project/src/logo.png"
            alt="logo" />
        <h1>Sistema de Gestión Escolar</h1>
    </header>
        <nav>
        <ul class="nav">
                <li><a href="/project/usuario-alumno.php?id=<?php echo $usuario?>" >Bloque</a>
                    <ul>
                        <li><a href="/project/usuario-alumno-bloque_uno.php?id=<?php echo $usuario?>">Bloque 1</a></li>
                        <li><a href="/project/usuario-alumno-bloque_dos.php?id=<?php echo $usuario?>">Bloque 2</a></li>
                        <li><a href="#">Bloque 3</a></li>
                    </ul>
                </li>
                <li><a href="/project/usuario-alumno-temas.php?id=<?php echo $usuario?>">Temas</a></li>
                <li><a href="/project/usuario-alumno-materia.php?id=<?php echo $usuario?>">Material</a></li>
                <li><a href="/project/usuario-alumno-actividad.php?id=<?php echo $usuario?>">Actividad</a></li>
                <li><a href="">Tipo de material</a>
                    <ul>
                        <li><a href="/project/usuario-alumno-videos.php?id=<?php echo $usuario?>">Video</a></li>
                        <li><a href="">Material para imprimir</a></li>
                        <li><a href="">Actividad en línea</a></li>
                        <li><a href="">Examen o evaluación</a></li>
                    </ul>
                </li>
                <li><a href="usuario-alumno-actualizacion.php?id=<?php echo $usuario?>" style="background-color: blue;">Actualización</a></li>
                <li><a href="/project/usuario-alumno-soporte.php?id=<?php echo $usuario?>">Soporte</a></li>
                <li><a href="/project/usuario-alumno-ay.php?id=<?php echo $usuario?>">Ayuda</a></li>
            </ul>
        </nav>
    <section name="area-desplegar">
        <form action="/project/usuario-alumno-actualizacion.php?id=<?php echo $id?>" method="POST" class="form-registro">
            <label for="">Nombre completo:</label>
            <input type="text" name="nombre" value="<?php echo $nombre?>" required><br><br>
            <label for="">Usuario:</label>
            <input type="text" name="usuario" value="<?php echo $usuario?>" required><br><br>
            <label for="">Tipo de usuario:</label>
            <select name="tipo_usuario" id="tipo_usuario" required><br><br>
                <option selected><?php echo $tipo_usuario?></option>
                <option value="Administrador">Administrador</option>
                <option value="Alumno">Alumno</option>
                <option value="Profesor">Profesor</option>
            </select><br><br>
            <label for="">Correo electrónico:</label>
            <input type="email" name="correo" value="<?php echo $correo?>" required><br><br>
            <label for="">Contraseña:</label>
            <input type="password" name="contrasena"  value="<?php echo $contrasena?>" required><br><br>
            <button type="submit" class="enviar-datos" onclick="alert('Datos enviados satisfactoriamente...')" name="update">Actualizar datos</button><br><br>      
            <button type="reset" class="limpiar-datos">Limpiar datos</button>   
        </form>
    </section>
    <aside>
        <h2>Inicio de sesión</h2>
        <form action="" class="login-form">
            <label for="">Usuario:</label>
            <input type="text" placeholder="<?php echo $usuario ?>" disabled>
            <label for="">Contraseña:</label>
            <input type="password" disabled>
            <button type="submit" class="inactive" disabled>Iniciar sesión</button>
            <select name="tipo_usuario" id="tipo_usuario" style="border: black 2px solid; margin-top:2rem; width:80%; height: 26px;">
                <option value="<?php echo $tipo_usuario?>" selected disabled><?php echo $tipo_usuario?></option>
            </select>
            <!-- <a href="#">Registrarse</a>
            <a href="#">Recuperar contraseña</a> -->
            <p style="margin-top: 5rem;"><b>
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