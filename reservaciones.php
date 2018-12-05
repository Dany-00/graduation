<?php
	include "conexion.php";
	$consulta=
	"SELECT
	    lugares.idLugar,
	    mesa,
	    lugar,
        usuarios.Nombre,
        usuarios.Apellido
	FROM
	    lugares
	JOIN usuarios ON usuarios.IdUsuario = lugares.idUsuario";
	
	$resultado=$db->query($consulta);

    $reservaciones=array();

    while($fila=$resultado->fetch_assoc()){
        $reservaciones[]=$fila;
    }
    //var_dump($reservaciones[0]);

    $json=json_encode($reservaciones);
    echo $json;
?>