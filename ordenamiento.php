<?php
	include "conexion.php";

	$consulta="
	SELECT
	    usuarios.Nombre,
	    galeria.imagen,
	    galeria.likes
	FROM
	    galeria
	JOIN usuarios ON usuarios.IdUsuario = galeria.idUsuario";

	$resultado=$db->query($consulta);
	$cuadros=$resultado->num_rows;
	$galeria=array();

	while($fila=$resultado->fetch_assoc()){
        $galeria[]=$fila;
    }
    //var_dump($resultado->num_rows);

    $json=json_encode($galeria);
    echo $json;
?>