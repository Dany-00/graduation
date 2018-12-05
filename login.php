<?php
	session_start();
	include "conexion.php";
	$user=$_POST["user"];
	$password=$_POST["password"];

	$consulta="SELECT * FROM usuarios WHERE usuario='$user' AND contrasena='$password'";
	$resultado=$db->query($consulta);

	$filas=$resultado->num_rows;
	$usuarios= array();

	while($fila=$resultado->fetch_assoc()){
	    $usuarios[]=$fila;
	}
	//var_dump($usuarios[0]);
	//Si encontro el usuario
	if($filas>0){
		$_SESSION["user"]=$user;
		$_SESSION["id"]=$usuarios[0]["IdUsuario"];
		$_SESSION["Name"]=$usuarios[0]["Nombre"];
		$_SESSION["lastName"]=$usuarios[0]["Apellido"];
		echo "1";
	}
	//No lo encontro
	else{
		echo "0";
	}
?>