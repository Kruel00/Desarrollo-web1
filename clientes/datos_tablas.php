<?php 
        #objeto prestamos
        class Prestamos{
            public $referencia;
            public $fecha;
            public $importe;
        };

        #objeto ahorro
        class Ahorro
        {
            public $referenciaAhorro;
            public $fechaDeposito;
            public $importeDeposito;
        };

        #Datos de la tabla prestammos.
        $listaPrestamos = array();
        $presta = new Prestamos;
        $presta -> referencia = "#325654";
        $presta -> fecha = "diciembre 10, 2020";
        $presta -> importe = 800;
        array_push($listaPrestamos, $presta);

        $presta = new Prestamos;
        $presta -> referencia = "#3452433";
        $presta -> fecha = "Enero 15, 2019";
        $presta -> importe = 800;
        array_push($listaPrestamos, $presta);

        $presta = new Prestamos;
        $presta -> referencia = "#988812";
        $presta -> fecha = "Septiembre 03, 2020";
        $presta -> importe = 800;
        array_push($listaPrestamos, $presta);

        $presta = new Prestamos;
        $presta -> referencia = "#122553";
        $presta -> fecha = "Noviembre 20, 2020";
        $presta -> importe = 1000;
        array_push($listaPrestamos, $presta);

##########################################################################################################################################
        #Datos de la tabla ahorros.
        $listaAhorros = array();
        $deposito = new Ahorro;
        $deposito -> referenciaAhorro = "#123123";
        $deposito -> fechaDeposito = "Julio 25, 2021";
        $deposito -> importeDeposito = 1350;
        array_push($listaAhorros, $deposito);

        $deposito = new Ahorro;
        $deposito -> referenciaAhorro = "#34534";
        $deposito -> fechaDeposito = "Octubre 18, 2019";
        $deposito -> importeDeposito = 4000;
        array_push($listaAhorros, $deposito);

        $deposito = new Ahorro;
        $deposito -> referenciaAhorro = "#435355";
        $deposito -> fechaDeposito = "Agosto 09, 2020";
        $deposito -> importeDeposito = 1550;
        array_push($listaAhorros, $deposito);

        $deposito = new Ahorro;
        $deposito -> referenciaAhorro = "#23423";
        $deposito -> fechaDeposito = "Julio 14, 2021";
        $deposito -> importeDeposito = 3000;
        array_push($listaAhorros, $deposito);

        $deposito = new Ahorro;
        $deposito -> referenciaAhorro = "#09865";
        $deposito -> fechaDeposito = "Enero 10, 2020";
        $deposito -> importeDeposito = 1250;
        array_push($listaAhorros, $deposito);
    ?>