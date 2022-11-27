<?php

include 'include/connect.php';
include 'include/preg.php';


?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>SMGR | Registrate o Inicia Sesión</title>
</head>
<body>

  <div class="container col-12 p-5 mt-5">

    <div class="row">

        <div class="container col-lg-6 border-end">

            <div class="row mx-2">

                <div class="col">

                    <h1 class="text-center">Registrate</h1>
                    <div class="col">
                        <form class="form-control" action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">

                            <label for="" class="form-label">Nombre</label>
                            <input type="text" placeholder="Ingresa tu Nombre" name="nombre" class="form-control">

                            <label for="" class="form-label">Correo</label>
                            <input type="email" id="" placeholder="correo@ejemplo.com" name="correo" class="form-control">

                            <label for="" class="form-label">Contraseña</label>
                            <input type="password" id="" placeholder="Ingresa una contraseña" name="pass" class="form-control">
                            
                            <div class="mt-5 position-relative">
                                <input type="submit" name="btnRegistrar" value="Continuar" class="btn btn-primary position-absolute bottom-0 end-0">
                            </div>
                        </form>
                    </div>
                </div>

            </div>
    
        </div>

        <!--Formulario inicio de sesión-->
        <div class="container col-lg-6 border-start">
            <div class="row mx-2">
                <div class="col">
                    <h1 class="text-center">Inicia sesión</h1>
                    <div class="col">
                        <form name="login" class="form-control" action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">

                            <label for="" class="form-label">Correo</label>
                            <input type="email" name="mail" id="" placeholder="correo@ejemplo.com" class="form-control">

                            <label for="" class="form-label">Contraseña</label>
                            <input type="password" name="contraseña1" id="" placeholder="Ingresa una contraseña" class="form-control">
                            
                            <div class="mt-5 position-relative ">
                                <input type="submit" name="btnEntrar value="Iniciar sesión" class="btn btn-primary position-absolute bottom-0 end-0">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
  </div>
    


    <script src="js/bootstrap.min.js"></script>
</body>
</html>