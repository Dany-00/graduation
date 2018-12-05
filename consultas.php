<?php
include "conexion.php";
$consulta ="SELECT * FROM usuarios";

$resultado =$db->query($consulta);
$usuarios= array();

while($filas=$resultado->fetch_assoc()){
    $usuarios[]=$filas;
}

//var_dump($usuarios);

?>
<table>
    <thead>
        <tr>
            <th>id</th>
            <th>usuario</th>
            <th>contraseña</th>
            <th>email</th>
            <th>rol</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($usuarios AS $usuario){
            echo "<tr>
                <td>$usuario[id]</tb>
                <td>$usuario[usuario]</tb>
                <td>$usuario[contrasena]</tb>
                <td>$usuario[email]</tb>
                <td>$usuario[rol]</tb>
            </tr>";

        }
        ?>
    </tbody>

</table>