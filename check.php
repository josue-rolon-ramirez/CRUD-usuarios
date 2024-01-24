<?php 


    include('conexion-db.php');
    $user = $_POST['usuario'];
    $password = $_POST['contraseña'];
    

    $usuarios = mysqli_query($conexion, "SELECT * FROM usuarios WHERE user='$user' and pass='$password'");

    if($fila = mysqli_fetch_array($usuarios)){
        session_start();
         $_SESSION['nombre'] = $fila['nombre'];
         $_SESSION['apellido'] = $fila['apellido'];
         $_SESSION['email'] = $fila['email'];
         $_SESSION['user'] = $fila['user'];
         $_SESSION['pass'] = $fila['pass'];
         $_SESSION['telefono'] = $fila['telefono'];
         $_SESSION['nivel'] = $fila['nivel'];
        define('PAGINA_INICIO', 'ingreso.php');
        header('Location:'.PAGINA_INICIO);
        
        
        
    
     }else{
         define('PAGINA_INICIO', 'login.php?mensaje=mensaje_error');
         header('Location:'.PAGINA_INICIO);
     }
    

?>



