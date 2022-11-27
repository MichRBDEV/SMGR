<?php

include 'connect.php';

if(isset($_POST['btnRegistrar'])){
    $name = $_POST['nombre'];
    $mail = $_POST['correo'];
    $password = $_POST['pass'];

    $q = "INSERT INTO usuario(id_usuario, Nombre, correo, contraseña) VALUES(null,'$name','$mail', '$password')";
    $ejq = $conecta->query($q);

    if($ejq>0){
        header("location:index.html");
    }
    else{ 
        echo "Hubo un error, intentalo más tarde";
    }


}

if(isset($_POST['btnEntrar'])){

    $usuario = $_POST['mail'];
    $pass1 = $_POST['contraseña1'];

    $q2 = "SELECT * FROM usuario WHERE correo = '$usuario' and contraseña = '$pass1'";

    if($resultado = $conecta->query($q2)){
        while($row = $resultado->fetch_array()){
            $uok = $row['correo'];
            $pok = $row['contraseña'];
        }
        
    }
    if($usuario=$uok && $pass1=$pok){
        header("location:index.html");
    }
}


?>