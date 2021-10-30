<!-- 
    Pagina de registro de usuarios.
    Alumno: Javier Castorena Carvajal.
    Matricula: ES172006048
    Grupo: DS-DPW1-2102-B2-001
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/estilos.css" rel="stylesheet" type="text/css" />
    <title>Document</title>
</head>
<body>
    <div class="registrar">
    <!-- Barra superior con el nombre de la organizacion -->
    <div class="top-baner">
        <h1>Financiera Chavez</h1>
    </div>
    <hr>
    <h3>Registro de usuarios</h3>
    <!-- Formulario de registro de usuarios -->
    <div class="media">
        <div class="formulario-registro-usuarios">
            <div class="campos-registro">
                <form action="mostrar_datos.php" method="POST">
                    <label for="idNombre">Nombre*</label>
                    <input type="text" name="nombre" id="idNombre"><br>
                    <label for="idApePaterno">Apellido paterno*</label>
                    <input type="text" name="apePaterno" id="idApePaterno"><br>
                    <label for="idApeMaterno">Apellido materno*</label>
                    <input type="text" name="apeMaterno" id="idApeMaterno"><br>
                    <label for="idCorreo">Correo electronico*</label>
                    <input type="email" name="email" id="idCorreo"><br>
                    <label for="idContrasena">Contraseña</label>
                    <input type="password" name="password" id="idContrasena"><br>
                    <label for="idReContra">Confirmar contraseña</label>
                    <input type="password" id="idReContra"><br>
                    <label for="idNacimiento">Fecha de nacimiento</label>
                    <input type="date" name="fecha" id="idNacimiento"><br>
                    <input type="submit" name="botonsote" id="button1">
                </form>
            </div>
            <div class="img"><img src="img/sample.png" alt=""></div>
        </div>
    </div>
</div>
    <footer>
        <ul>
            <li>Alumno: Javier Castorena Carvajal.</li>
            <li>Matricula: ES172006048</li>
            <li>Grupo: DS-DPW1-2102-B2-001</li>
        </ul>
    </footer>   
</body>
</html>