<?php
session_start();
include "conexion.php";

$idUsu=$_SESSION["id"];
$mesa=$_POST["mesa"];
$silla=$_POST["silla"];

$consulta="INSERT INTO lugares(idUsuario,mesa,lugar) VALUES($idUsu,$mesa,$silla)";
$resultado=$db->query($consulta);

echo $resultado;
?>