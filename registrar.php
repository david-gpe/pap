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

 ?>