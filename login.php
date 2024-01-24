<?php 
    $error ='';
    if(isset($_GET['mensaje']) && ($_GET['mensaje']=='mensaje_error')){
      $error =  "Su usuario o contraseña son incorrectos vuelva a intentarlo";
    }

    if(isset($_GET['mensaje']) && ($_GET['mensaje']=='exito')){
      $error = "Sesion cerrada con exito";
    }

    if(isset($_GET['mensaje']) && ($_GET['mensaje']=='sin_permiso')){
      $error = "Lo lamento no tienes permiso para acceder al sitio
      vuelve a intentarlo";
    }

    if(isset($_GET['mensaje']) && ($_GET['mensaje']=='registro_exitoso')){
      $error = "Su registro fue exitoso ingrese a su cuenta con sus datos";
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-10 col-md-6 card mt-5 shadow rounded">
        <h2 class="text-center mt-5 justify-content-center" >INICIO DE SESSION</h2>
        <div>
            <form action="check.php" method="post">
            
            <div class="text-center align-items-center">

            <div class="col-12 mx-auto">
            <label for="usuario" class="h5 mt-5 mx-3">Usuario</label>
            <input type="text" name="usuario" class="w-50" >
            </div>

            <div class="col-12 mx-auto">
            <label for="contraseña" class="h5 mt-5 mb-3 mx-0 ">Contraseña</label>
            <input type="password" name="contraseña" class="w-50">

            </div>


            <div>
              <p class="h5 mt-3 mb-4 text-center text-success"><?php echo $error?></p>
            </div>

            <div class="d-md-inline-flex float-right mt-3 mt-md-0" >
              <p class="px-2 my-auto">¿No tienes cuenta? Registrate aqui</p>
              <a href="registro.php" class="text-decoration-none text-white btn-sm btn-success float-right align-self-center">Registrarse</a>
            </div>

            <div class="d-block">
            <input class="btn btn-primary mb-4 mt-4" type="submit" value="Entrar">
            </div>

            </div>

            </form>
        </div>
    </div>
  </div>

</div>


    
</body>
</html>