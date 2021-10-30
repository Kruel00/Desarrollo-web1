<?php 
        class sucursal{
            public $numSucursal;
            public $nombreSucursal;
            public $direccion;
            public $telefono;
            public $gerente;
        };

        #Datos de la tabla sucursal.
        $listaDeSucursales = array();
        $sucursal = new sucursal;
                $sucursal -> numSucursal = 1;
                $sucursal -> nombreSucursal = "Matriz";
                $sucursal -> direccion = "Calle. Tercera #125 Zona Centro C.P 255454";
                $sucursal -> telefono = "6861458256";
                $sucursal -> gerente = "Juan Lopez";
                array_push($listaDeSucursales, $sucursal);
?>