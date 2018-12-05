<?php 
	session_start();
	include "conexion.php";

	$idUsu=$_SESSION["id"];
	$img=$_FILES["img"];
	$nameImg=$img["name"];
	$fileImg=$img["tmp_name"];
	$directory="Fotos/";

	//var_dump($img);

	$extension=end(explode(".", $nameImg));
	$namImgFinal=uniqid().".".strtolower($extension);
	move_uploaded_file(
		$fileImg, $directory . basename($namImgFinal)
	);

	$consulta="INSERT INTO galeria(idUsuario,imagen,likes) VALUES($idUsu,'$namImgFinal',0)";
	$resultado=$db->query($consulta);

	echo $consulta;
	if($resultado){
	    header('Location: Fotos.php');
	}
?>