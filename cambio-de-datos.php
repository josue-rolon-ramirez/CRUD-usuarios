<?php 
    include('conexion-db.php');
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $telefono = $_POST['telefono'];
    $nivel = $_POST['nivel'];

    mysqli_query($conexion,"UPDATE usuarios SET nombre='$nombre', apellido='$apellido', email='$email', user='$user', pass='$pass', telefono='$telefono', nivel='$nivel' WHERE email='$email' ");
    
    define('PAGINA_INICIO', 'usuarios.php?mensaje=cambio_exitoso');
    header('Location:'.PAGINA_INICIO);

?>