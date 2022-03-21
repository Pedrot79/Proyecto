<?php
require 'conexion.php';

$n=$_POST['Nombre'];
$d=$_POST['dir'];
$c=$_POST['cel'];
$e=$_POST['correo'];
$sql1="INSERT INTO `datos` (`nombre`, `direccion`, `celular`, `correo`) VALUES ('$n','$d', '$c', '$e')";
mysqli_query($db, $sql1);
echo "Exito";
?>
<form action="agenda.php">
    <input type="submit" submit="Volver">
</form>