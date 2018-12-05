<?php
    $db = new mysqli("localhost","root","admin123","graduacion");
    if($db->connect_errno) {
        echo "Ocurrio un error en la conexion ".$db->connect_error;
    }
    
?>