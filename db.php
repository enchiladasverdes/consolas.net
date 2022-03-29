<?php

    $hostname = "localhost";
    $usuariodb = "enchi";
    $passworddb = "";
    $dbname = "consol.net";
    $conectar = mysqli_connect($hostname,$usuariodb,$passworddb,$dbname);
    return $conectar;

?>