<?php
include "conexion.php";

$usuario =$_POST["usuario"];
$contrasena=$_POST["contrasena"];
$email=$_POST["email"];
$name=$_POST["name"];
$lastName=$_POST["lastName"];
$rol=$_POST["rol"];

$avatar=$_FILES["avatar"];
$nameImg=$avatar["name"];
$fileImg=$avatar["tmp_name"];
$directory="avatars/";

$extension=end(explode(".", $nameImg));
$nameImgFinal=uniqid().".".strtolower($extension);
move_uploaded_file(
	$fileImg, $directory . basename($nameImgFinal)
);

$consulta ="INSERT INTO usuarios (usuario, contrasena, email, rol, Nombre,Apellido, avatar) values ('$usuario','$contrasena','$email','$rol','$name','$lastName','$nameImgFinal')";
$resultado=$db->query($consulta);

echo $consulta;
if($resultado){
    header('Location: salon.php');
}
else{
    echo "Ocurrio un error al crear el usuario";
}
?>