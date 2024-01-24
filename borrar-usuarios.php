<?php
    include('conexion-db.php');
    session_start();
    if($_SESSION['nivel']=='1'){
        $email = $_GET['email'];
        mysqli_query($conexion,"DELETE FROM usuarios WHERE email='$email'");
        define('PAGINA_INICIO', 'usuarios.php?mensaje=cuenta_eliminada');
        header('Location:'.PAGINA_INICIO);
    }else{
        define('PAGINA_INICIO','usuarios.php');
        header('Location:'.PAGINA_INICIO);
    }

?>