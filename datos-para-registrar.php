<?php 
    include('conexion-db.php');
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $telefono = $_POST['telefono'];
    $nivel = $_POST['nivel'];

    mysqli_query($conexion,"INSERT INTO usuarios(nombre,apellido,email,user,pass,telefono,nivel) VALUES('$nombre', '$apellido', '$email', '$user', '$pass', '$telefono', '$nivel')");
    
    define('PAGINA_INICIO', 'login.php?mensaje=registro_exitoso');
    header('Location:'.PAGINA_INICIO);

?>