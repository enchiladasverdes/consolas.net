<?php

    $hostname = "localhost";
    $usuariodb = "root";
    $passworddb = "";
    $dbname = "consol.net";
    $conectar = mysqli_connect($hostname,$usuariodb,$passworddb,$dbname);
    return $conectar;

?>