<?php
    
    $con = new mysqli('localhost', 'root', '', 'sa');

    if($con->connect_error){
        $msg = "Falha ao conectar: ".$con->connect_error;
        alertErro($msg);
    }

?>