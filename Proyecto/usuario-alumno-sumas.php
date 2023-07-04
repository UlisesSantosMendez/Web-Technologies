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
                <li><a href="/project/usuario-alumno-actividad.php?id=<?php echo $usuario?>" style="background-color: blue;">Actividad</a></li>
                <li><a href="">Tipo de material</a>
                    <ul>
                        <li><a href="/project/usuario-alumno-videos.php?id=<?php echo $usuario?>">Video</a></li>
                        <li><a href="">Material para imprimir</a></li>
                        <li><a href="">Actividad en línea</a></li>
                        <li><a href="">Examen o evaluación</a></li>
                    </ul>
                </li>
                <li><a href="usuario-alumno-actualizacion.php?id=<?php echo $usuario?>">Actualización</a></li>
                <li><a href="/project/usuario-alumno-soporte.php?id=<?php echo $usuario?>">Soporte</a></li>
                <li><a href="/project/usuario-alumno-ay.php?id=<?php echo $usuario?>">Ayuda</a></li>
            </ul>
        </nav>
    <section name="area-desplegar">
    <form action="php/verifSum.php" name="sumasQuiz" method="GET">
        <h2>Cuestionario acerca de las sumas</h2>
        <p>Responde correctamente</p>
        <div class="results" >
          <p id="results"></p>
        </div>
        <div class="conteinerInputs">
          <h3>3 + 4</h3>
          <input type="radio" name="p1" id="" value="a" />a) 7
          <input type="radio" name="p1" id="" value="b" />b) 3
          <input type="radio" name="p1" id="" value="c" />c) 1
          <input type="radio" name="p1" id="" value="d" />d) 8

          <h3>8 + 4</h3>
          <input type="radio" name="p2" id="" value="a" />a) 11
          <input type="radio" name="p2" id="" value="b" />b) 10
          <input type="radio" name="p2" id="" value="c" />c) 12
          <input type="radio" name="p2" id="" value="d" />d) 8

          <h3>20 + 42</h3>
          <input type="radio" name="p3" id="" value="a" />a) 45
          <input type="radio" name="p3" id="" value="b" />b) 62
          <input type="radio" name="p3" id="" value="c" />c) 33
          <input type="radio" name="p3" id="" value="d" />d) 56

          <h3>52 + 38</h3>
          <input type="radio" name="p4" id="" value="a" />a) 95
          <input type="radio" name="p4" id="" value="b" />b) 72
          <input type="radio" name="p4" id="" value="c" />c) 12
          <input type="radio" name="p4" id="" value="d" />d) 90

          <h3>50 + 50</h3>
          <input type="radio" name="p5" id="" value="a" />a) 100
          <input type="radio" name="p5" id="" value="b" />b) 120
          <input type="radio" name="p5" id="" value="c" />c) 87
          <input type="radio" name="p5" id="" value="d" />d) 90

          <h3>120 + 30</h3>
          <input type="radio" name="p6" id="" value="a" />a) 50
          <input type="radio" name="p6" id="" value="b" />b) 120
          <input type="radio" name="p6" id="" value="c" />c) 130
          <input type="radio" name="p6" id="" value="d" />d) 150
          <div class="btn-enviar">
            <button type="submit" id="enviar" class="enviar-datos" name="enviar">Enviar</button>
          </div>
        </div>
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