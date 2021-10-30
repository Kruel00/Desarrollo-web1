<?php
    if(!empty($_POST)){
    $serverName = "localhost";
    $conectionInfo = array("Database"=>"fus","UID"=>"weblogin","PWD"=>"1234");
    
    $conn = sqlsrv_connect($serverName, $conectionInfo);

    if($conn)
    {
        echo "conexion salio bien chidori";
    }
    else{
        echo "ya valio madre";
        die(print_r(sqlsrv_errors(),true));
    }
    }

?>