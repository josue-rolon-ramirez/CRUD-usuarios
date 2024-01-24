<?php 
        include('conexion-db.php');
        session_start();
    if( (isset($_FILES['foto']['name']) && ($_FILES['foto']['error']==UPLOAD_ERR_OK)) ){
        $nombre = $_SESSION['email'].'.jpg';
        $ruta_de_destino = 'img/'.$nombre;

        move_uploaded_file($_FILES['foto']['tmp_name'], $ruta_de_destino);
        /* En esta funcion puede que marque error al momento de mover
            el archivo a la carpeta y el error el siguiente:
            move_uploaded_file(../descargas/Princesa_Zelda_BotW.webp): failed to open stream: Permission denied in /Applications/XAMPP/xamppfiles/htdocs/practicas-php/practica7/uploads/upload.php on line 10
            Warning: move_uploaded_file(): Unable to move '/Applications/XAMPP/xamppfiles/temp/php1ChEMD' to '../descargas/Princesa_Zelda_BotW.webp' in /Applications/XAMPP/xamppfiles/htdocs/practicas-php/practica7/uploads/upload.php on line 10
            Estos errores son debido a que la carpeta o el archivo (en este caso la carpeta)
            no tiene permisos para que puedan acceder y mover la imagen a la carpeta
            lo cual se tiene que ir a la carpeta que moveremos la imagen, dar click derecho
            y dar en "obtener informacion" ir hasta la parte de abajo donde aparece "admin" y "everyone"
            y cambiar a "leer y escribir";
            */
    }

    define('PAGINA_INICIO', 'ingreso.php?mensaje=imagen_exitosa');
    header('Location:'.PAGINA_INICIO);

?>