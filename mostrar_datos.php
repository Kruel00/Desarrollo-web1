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
    <?php 
        $nombre = $_POST["nombre"];
        $apePaterno = $_POST["apePaterno"];
        $apeMaterno = $_POST["apeMaterno"];
        $email = $_POST["email"];
        $password = $_POST["password"];
    ?>
    <h2>Usuario registrado</h2>
    <table>
    <tr>
        <td>Nombre</td>
        <td>Apellido Paterno</td>
        <td>Apellido Materno</td>
        <td>Email</td>
    </tr>
    <tr>
        <td><?php echo $nombre ?></td>
        <td><?php echo $apePaterno ?></td>
        <td><?php echo $apeMaterno ?></td>
        <td><?php echo $email ?></td>
    </tr>
</table>
</body>
</html>

