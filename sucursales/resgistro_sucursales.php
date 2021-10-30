<?php
class sucursal
{
    public $numSucursal;
    public $nombreSucursal;
    public $direccion;
    public $telefono;
    public $gerente;
};

#Datos de la tabla sucursal.
$listaDeSucursales = array();
$sucursal = new sucursal;
$sucursal->numSucursal = 1;
$sucursal->nombreSucursal = "Matriz";
$sucursal->direccion = "Calle. Tercera #125 Zona Centro C.P 255454";
$sucursal->telefono = "6861458256";
$sucursal->gerente = "Juan Lopez";
array_push($listaDeSucursales, $sucursal);
?>

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
    <div class="top-banner">
        <h2>Registro de sucursales</h2>
        <hr>
    </div>
    <div class="form-registro">
        <form action="" method="$_POST">
            <div class="input-form-area">
                <label for="idNumeroSucursal">Numero de sucursal</label>
                <input type="text" name="numSucursal" id="idNumeroSucursal" placeholder="Numero de sucursal">
                <label for="idNombreSucursal">Nombre de sucursal</label>
                <input type="text" name="nomSucursal" id="idNombreSucursal" placeholder="Nombre de sucursal">
                <label for="idDireccionSucursal">Direccion de sucursal</label>
                <input type="text" name="dirSucursal" id="idDireccionSucursal" placeholder="Direccion">
                <label for="idTelefonoSucursal">Telefono</label>
                <input type="text" name="telSucursal" id="idTelefonoSucursal" placeholder="Telefono">
                <label for="idGerente">Encargado</label>
                <input type="text" name="gerSucursal" id="idGerente" placeholder="Encargado">
                <input type="submit" name="" id="botonEnviar" value="Registrar" onclick="nuevaSucursal()">
            </div>
        </form>
        <div class="tabla-sucursales">
            <table>
                <tr>
                    <td>Numero</td>
                    <td>Nombre</td>
                    <td>Direccion</td>
                    <td>Telefono</td>
                    <td>Responsable</td>
                </tr>
                <tr>
                    <?php

                    $sucursal = new sucursal;
                    $sucursal->numSucursal = $_GET["numSucursal"];
                    $sucursal->nombreSucursal = $_GET["nomSucursal"];
                    $sucursal->direccion = $_GET["dirSucursal"];
                    $sucursal->telefono = $_GET["telSucursal"];
                    $sucursal->gerente = $_GET["gerSucursal"];
                    array_push($listaDeSucursales, $sucursal);


                    foreach ($listaDeSucursales as $sucursal) {
                        echo "<tr>";
                        echo "<td>" . $sucursal->numSucursal . "</td>";
                        echo "<td>" . $sucursal->nombreSucursal . "</td>";
                        echo "<td>" . $sucursal->direccion . "</td>";
                        echo "<td>" . $sucursal->telefono . "</td>";
                        echo "<td>" . $sucursal->gerente . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>