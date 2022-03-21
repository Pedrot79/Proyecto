<?php
$servidor="localhost";
$usuario="root";
$contrasena="";
$db=mysqli_connect($servidor,$usuario,$contrasena);
mysqli_select_db($db,"agenda");
?>