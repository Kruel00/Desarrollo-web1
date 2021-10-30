<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/estilos.css" rel="stylesheet" type="text/css" />
    <title>Document</title>
</head>
<body>

<?php
    class cliente{
        public $numCuenta;
        public $numeroSeguro;
        public $nombre;
        public $apePaterno;
        public $apeMaterno;
        public $email;
        public $direccion;
        public $telefono;
        public $ahorro;
        public $adeudo;
    }

    $cliente = new cliente;
    $cliente -> numCuenta = rand(time(),500);
    $cliente -> numeroSeguro = rand(time(),500);
    $cliente -> nombre = $_POST["nombre"];
    $cliente -> apePaterno = $_POST["apePaterno"];
    $cliente -> apeMaterno = $_POST["apeMaterno"];
    $cliente -> email = $_POST["email"];
    $cliente -> direccion = $_POST["direccion"];
    $cliente -> telefono = $_POST["telefono"];
    $cliente -> ahorro = rand(1,5000);
    $cliente -> adeudo = rand(1,5000);
    array_push($listaClientes, $cliente);
?>
<h3>Registrar cliente</h3>
<table>
    <tr>
        <td>Numero de cuenta</td>
        <td>Numero de seguro</td>
        <td>Noombre</td>
        <td>Apellido paterno</td>
        <td>Apellido materno</td>
        <td>Email</td>
        <td>Direccion</td>
        <td>Telefono</td>
        <td>Ahorro</td>
        <td>Adeudo</td>
    </tr>

<?php

foreach($listaClientes as $clienter)
{
    echo "<tr>";
        echo "<td>" . $clienter->numCuenta . "</td>";
        echo "<td>" . $clienter->numeroSeguro . "</td>";
        echo "<td>" . $clienter->nombre . "</td>";
        echo "<td>" . $clienter->apePaterno . "</td>";
        echo "<td>" . $clienter->apeMaterno . "</td>";
        echo "<td>" . $clienter->email . "</td>";
        echo "<td>" . $clienter->direccion . "</td>";
        echo "<td>" . $clienter->telefono . "</td>";
        echo "<td>" . "$" . $clienter->ahorro . ".00 </td>";
        echo "<td>" . "$". $clienter->adeudo . ".00 </td>";
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>    
