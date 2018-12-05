<?php 
	include "conexion.php";
	$consulta=
	"SELECT
	    usuarios.Nombre,
	    imagen,
	    likes,
	    idGal
	FROM
	    galeria
	JOIN usuarios ON usuarios.IdUsuario = galeria.idUsuario";
	
	$resultado=$db->query($consulta);

    $pila=array();

    while($fila=$resultado->fetch_assoc()){
        $pila[]=$fila;
    }
    $filas=$resultado->fetch_assoc();
    //var_dump($pila[0]);
    
    $json=json_encode($pila);
    echo $json;
?>