<?php 
 // echo json_encode($_POST);
    $host = 'localhost';
    $user = 'root';
    $password= '';
    $db = 'facturacion';
    $conexion = mysqli_connect($host,$user, $password, $db);

    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $clave = sha1($_POST['clave']);
    $rol = 1;
   



    $query=mysqli_query($conexion,"INSERT INTO usuario (nombre,correo,usuario,clave, rol) VALUES ('$nombre','$correo','$usuario','$clave','$rol')");
    echo($query);


   /* if ( mysqli_num_rows($query) > 0) {
        echo mysqli_num_rows($query);   
             //header('Location: sistema/');
    }




   /* $host = 'localhost';
    $user = 'root';
    $password= '';
    $db = 'facturacion';
    $conexion = mysqli_connect($host,$user, $password, $db);

    $alert ='';
    session_start(); 

if (!empty($_SESSION['active'])) {
    header('location: sistema/');
    
}else{
    if(!empty($_POST)){
        if(empty($_POST['usuario']) || empty($_POST['clave'])){
            $alert = 'Ingrese un usuario y contraseña';
        }else{

            $user = $_POST['usuario'];
            $clave = $_POST['clave'];
            
            $query=mysqli_query($conexion,"SELECT * FROM usuario WHERE usuario = '$user' AND clave = '$clave'");

            if ( mysqli_num_rows($query) > 0) {
                $data = mysqli_fetch_array($query);
                $_SESSION['active']= true;
                $_SESSION['idUser'] = $data['idusuario'];
                $_SESSION['nombre'] = $data['nombre'];
                $_SESSION['email'] = $data['email'];
                $_SESSION['user'] = $data['usuario'];
                $_SESSION['rol'] = $data['rol'];

                header('location: sistema/');
            }else{
                $alert = 'El usuario o la clave son incorrectos';
                session_destroy;
            }
        }
    }
}*/

 ?>
