<?php

$servidor = "localhost";
$usuario = "root";
$contra = "";
$bd = "smgr";

$conecta = mysqli_connect($servidor, $usuario, $contra, $bd);

if($conecta -> connect_error){
    die("Error al conectar con la base de datos".$conecta->connect_error);
}

?>