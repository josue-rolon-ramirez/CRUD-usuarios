<?php 
 
    
    function getUsuariosAdmin(){
        $host = 'localhost';
        $user_db = 'root';
        $password_db ='';
        $database = 'crud-usuarios';
    
        $conexion = mysqli_connect($host,$user_db,$password_db,$database);

        $usuarios = mysqli_query($conexion, "SELECT * FROM usuarios");

        


         while($fila = mysqli_fetch_array($usuarios)){
            echo '
           
            <tr >
        <td class="col-auto text-center">'.$fila['nombre'].'</td>
        <td class="col-auto text-center">'.$fila['apellido'].'</td>
        <td class="col-auto text-center"><a href="mailto:'.$fila['email'].' ">'.$fila['email'].'</a></td>
        <td class="col-auto text-center">'.$fila['user'].'</td>
        <td class="col-auto text-center">'.$fila['pass'].'</td>
        <td class="col-auto text-center"><a href="tel:'.$fila['telefono'].' "> '.$fila['telefono'].'</a></td>
        <td class="col-auto text-center">'.$fila['nivel'].'</td>
        <td class="col-auto text-center"><a href="editar-usuarios.php?email='.$fila['email'].'">Editar</a></td>
        <td class="col-auto text-center"><a href="borrar-usuarios.php?email='.$fila['email'].'" onclick="return borrar();">Borrar</a></td>
            
            </tr>
           
             ';
         }
         
    }

    function getUsuarios(){
        $host = 'localhost';
        $user_db = 'root';
        $password_db ='';
        $database = 'crud-usuarios';
    
        $conexion = mysqli_connect($host,$user_db,$password_db,$database);

        $usuarios = mysqli_query($conexion, "SELECT * FROM usuarios");

        


         while($fila = mysqli_fetch_array($usuarios)){
            echo '
           
            <tr >
        <td class="col-auto text-center">'.$fila['nombre'].'</td>
        <td class="col-auto text-center">'.$fila['apellido'].'</td>
        <td class="col-auto text-center"><a href="mailto:'.$fila['email'].' ">'.$fila['email'].'</a></td>
        <td class="col-auto text-center">'.$fila['user'].'</td>
        <td class="col-auto text-center">'.$fila['pass'].'</td>
        <td class="col-auto text-center"><a href="tel:'.$fila['telefono'].' "> '.$fila['telefono'].'</a></td>
        <td class="col-auto text-center">'.$fila['nivel'].'</td>

            
            </tr>
           
             ';
         }
         
    }



?>