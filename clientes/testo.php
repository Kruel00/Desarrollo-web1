<h2>Ahorros</h2>
<input type="text" placeholder="Buscar">
<div class="tabla-ahorros">
    <table>
        <tr>
            <td>Referencia de deposito</td>
            <td>Fecha de deposito</td>
            <td>Importe</td>
            <td>Acciones</td>
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
