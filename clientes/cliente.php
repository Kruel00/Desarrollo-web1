<?php include("datos_tablas.php") ?>
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
    <h1>Financiera Chavez</h1>
    <hr>
    <div class="nav-bar-top">
        <a href="../index.html">Logout</a>
        <a href="">Cambiar contraseña</a>
    </div>
    <div class="area-prestamos"></div>
    <div class="banner">
        <h2>Prestamos</h2>
        <input type="text" placeholder="Buscar">
    </div>
    <div class="tabla-datos">
        <table>
            <tr>
                <td>Referencia de prestamo</td>
                <td>Fecha limite de pago</td>
                <td>Importe</td>
                <td>Acciones</td>
            </tr>
            <?php
            foreach ($listaPrestamos as $prestamo) {
                echo "<tr>";
                echo "<td>" . $prestamo->referencia . "</td>";
                echo "<td>" . $prestamo->fecha . "</td>";
                echo "<td>" . $prestamo->importe . "</td>";
                echo "<td> <a href=\"\">Pagar</a> </td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
    <div class="banner">
        <h2>Ahorros</h2>
        <input type="text" placeholder="Buscar">
    </div>
    <div class="tabla-ahorros">
        <table>
            <tr>
                <td>Referencia de deposito</td>
                <td>Fecha de deposito</td>
                <td>Importe</td>
            </tr>
            <?php
            foreach ($listaAhorros as $ahorro) {
                echo "<tr>";
                echo "<td>" . $ahorro->referenciaAhorro . "</td>";
                echo "<td>" . $ahorro->fechaDeposito . "</td>";
                echo "<td>" . $ahorro->importeDeposito . "</td>";
                echo "</tr>";
            }
            ?>
            </tr>
        </table>
    </div>

    <div class="botones-ahorros">
        <input type="button" value="Depositar">
        <input type="button" value="Retirar">
    </div>
</body>

</html>