<?php
    class asesor{
        public $nombre;
        public $apePaterno;
        public $apeMaterno;
        public $direccion;


        public function __construct($nombre, $apePaterno, $apeMaterno, $direccion)
        {
            $this -> nombre = $nombre;
            $this -> apePaterno = $apePaterno;
            $this -> apeMaterno = $apeMaterno;
            $this -> direccion = $direccion;
        }
    }


    class asesorCuentas extends asesor{
        public $carterasCuentas;

        public function __construct($carterasCuentas)
        {
            $this -> cuenta = $carterasCuentas;
        }
    }


    class asesorSeguros extends asesor{
        public $carteraAsegurados;

        public function __construct($carteraAsegurados)
        {
            $this -> cuenta = $carteraAsegurados;
        }
    }


    class asesorAhorros extends asesor{
        public $carterasAhorradores;

        public function __construct($carterasAhorradores)
        {
            $this -> cuenta = $carterasAhorradores;
        }
    }


?>