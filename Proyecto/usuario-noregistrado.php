<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Usuario no registrado | Principal</title>
    <link rel="stylesheet" href="/project/css/main.css" type="text/css" />
</head>

<body>
    <header>
        <img class="logo" src="/project/src/logo.png" alt="logo" />
        <h1>Sistema de Gestión Escolar</h1>
    </header>
    <ul class="nav">
        <li><a href="/project/usuario-noregistrado.php" style="background-color: blue;">Principal</a></li>
        <li><a href="/project/usuario-noregistrado-ad.html">Acerca de</a></li>
        <li><a href="/project/usuario-noregistrado-pf.html">Preguntas frecuentes</a></li>
        <li><a href="/project/usuario-noregistrado-cto.php">Contacto</a></li>
        <li><a href="/project/usuario-noregistrado-ay.html">Ayuda</a></li>
    </ul>
    <section name="area-desplegar">
        <h2>¡Bienvenida(o)!</h2>
        <p>Este proyecto tiene como objetivo implementar un sistema de gestión escolar con 4 tipos de usuarios, con el cual pondremos en práctica los conocimientos adquiridos durante el semestre para ma materia de Tecnologías para la Web.
        </p>
    </section>
    <aside>
        <h2>Inicio de sesión</h2>
        <form action="/project/validation.php" method="post" class="login-form">
            <label for="">Usuario:</label>
            <input type="text" name="usuario" required>
            <label for="">Contraseña:</label>
            <input type="password" name="contrasena" required>
            <label>Tipo de usuario:</label>
            <select name="tipo_usuario" id="tipo_usuario" style="border: black 2px solid;">
                <option value="Administrador">Administrador</option>
                <option value="Alumno" selected>Alumno</option>
                <option value="Profesor">Profesor</option>
            </select>
            <button type="submit">Iniciar sesión</button>

            <a href="/project/registro.php">Registrarse</a>
            <a href="#">Recuperar contraseña</a>
        </form>
    </aside>
    <footer>
        <h4>Copyright © 2021 Equipo 3 | Todos los derechos reservados.</h4>
        <h4>equipo3_tecweb@mail.com</h4>
    </footer>
</body>

</html>