<?php
    $error='';
    if(isset($_GET['mensaje'])&& ($_GET['mensaje']=='imagen_exitosa')){
        $error = 'Se agrego la imagen correctamente';
    }

    include('conexion-db.php');
    include('lista-usuarios.php');
    session_start();
    if($_SESSION['nivel']=='1'){
     
   $nombre_imagen = $_SESSION['email'].'.jpg';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <script>
        function confirmar(){
            if(!confirm("¿Desea cerrar sesión?")){
                return false;
            }
        }
      
    </script>
</head>
<body>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-9 card rounded shadow-sm mt-5">
                <div class="d-flex mb-4">
                
                <div class="col-3 card rounded">
                    <a href="ingreso.php" class="text-decoration-none text-center py-2" style="background:#EAEFF1; color:#36B0F1;"><span>Perfil</span></a>
                </div>

                <div class="col-3 card rounded" >
                    <a href="usuarios.php" class="text-decoration-none text-center py-2" style="background:#EAEFF1; color:#36B0F1;"><span >Usuarios</span></a>
                </div>

                <div class="col-3 card rounded " >
                    <a href="login.php?mensaje=exito" class="text-decoration-none text-center py-2" style="background:#EAEFF1; color:#36B0F1;" onclick="return confirmar();"><span >Cerrar Sesión</span></a>
                </div>

                <!-- div-flex --></div>

                <div class="col-4 align-self-center">
                <h4 class="text-center border rounded"><?php echo $_SESSION['nombre'].' '.$_SESSION['apellido']?></h4>
                </div>

                <div class="align-self-center mt-3">
                    <img src="img/<?php echo $nombre_imagen?>" alt="" width="150px" height="150px" class="border rounded-circle mb-4" >
                    
                </div>

                <div class="align-self-center" >
                    <form action="subir-foto.php" method="post" enctype="multipart/form-data">
                        <input type="file" name="foto" class="d-block" >
                        <input type="submit" name="ok" value="Enviar" class="float-end" >
                    </form>
                </div>
                

                <h4 class="text-center mt-4">Informacion de usuario</h4>

                <table style="border:1px solid #000"> 
                <tr style="border:1px solid #000">
                    <th class="text-center col-auto">Nombre</th>
                    <th class="text-center col-auto">Apellido</th>
                    <th class="text-center col-auto">Email</th>
                    <th class="text-center col-auto">Usuario</th>
                    <th class="text-center col-auto">Contraseña</th>
                    <th class="text-center col-auto">Telefeno</th>
                    <th class="text-center col-auto">Nivel</th>
                </tr>

                <tr>
                    <td class="text-center col-auto"><?php echo $_SESSION['nombre']?></td>
                    <td class="text-center col-auto"><?php echo $_SESSION['apellido']?></td>
                    <td class="text-center col-auto"><?php echo $_SESSION['email']?></td>
                    <td class="text-center col-auto"><?php echo $_SESSION['user']?></td>
                    <td class="text-center col-auto"><?php echo $_SESSION['pass']?></td>
                    <td class="text-center col-auto"><?php echo $_SESSION['telefono']?></td>
                    <td class="text-center col-auto"><?php echo $_SESSION['nivel']?></td>
                </tr>
                </table>

             
                

            </div>
        </div>
    </div>
</body>
</html>

<?php 
    }else{

        $nombre_imagen = $_SESSION['email'].'.jpg';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>

    <script>
        function confirmar(){
            if(!confirm("¿Desea cerrar sesión?")){
                return false;
            }
        }

      
    </script>
</head>
<body>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-9 card rounded shadow-sm mt-5">
                <div class="d-flex mb-4">
                
                <div class="col-3 card rounded">
                    <a href="ingreso.php" class="text-decoration-none text-center py-2" style="background:#EAEFF1; color:#36B0F1;"><span>Perfil</span></a>
                </div>

                <div class="col-3 card rounded" >
                    <a href="usuarios.php" class="text-decoration-none text-center py-2" style="background:#EAEFF1; color:#36B0F1;"><span >Usuarios</span></a>
                </div>

                <div class="col-3 card rounded " >
                    <a href="login.php?mensaje=exito" class="text-decoration-none text-center py-2" style="background:#EAEFF1; color:#36B0F1;" onclick="return confirmar();"><span >Cerrar Sesión</span></a>
                </div>

                </div>

                <div class="col-4 align-self-center">
                <h4 class="text-center border rounded"><?php echo $_SESSION['nombre'].' '.$_SESSION['apellido']?></h4>
                </div>
                <div class="align-self-center mt-3">
                    <img src="img/<?php echo $nombre_imagen?>" alt="" width="150px" height="150px" class="border rounded-circle">
                </div>

                <div class="align-self-center" >
                    <form action="subir-foto.php" method="post" enctype="multipart/form-data">
                        <input type="file" name="foto" class="d-block" >
                        <input type="submit" name="ok" value="Enviar" class="float-end" >
                    </form>
                </div>
                

                <h4 class="text-center mt-4">Informacion de usuario</h4>

                <table style="border:1px solid #000"> 
                <tr style="border:1px solid #000">
                    <th class="text-center col-auto">Nombre</th>
                    <th class="text-center col-auto">Apellido</th>
                    <th class="text-center col-auto">Email</th>
                    <th class="text-center col-auto">Usuario</th>
                    <th class="text-center col-auto">Contraseña</th>
                    <th class="text-center col-auto">Telefeno</th>
                    <th class="text-center col-auto">Nivel</th>
                </tr>

                <tr>
                    <td class="text-center col-auto"><?php echo $_SESSION['nombre']?></td>
                    <td class="text-center col-auto"><?php echo $_SESSION['apellido']?></td>
                    <td class="text-center col-auto"><?php echo $_SESSION['email']?></td>
                    <td class="text-center col-auto"><?php echo $_SESSION['user']?></td>
                    <td class="text-center col-auto"><?php echo $_SESSION['pass']?></td>
                    <td class="text-center col-auto"><?php echo $_SESSION['telefono']?></td>
                    <td class="text-center col-auto"><?php echo $_SESSION['nivel']?></td>
                </tr>
                </table>

                
                

            </div>
        </div>
    </div>
</body>
</html>

<?php
    }
?>