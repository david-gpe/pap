<?php 
	$host = 'localhost';
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
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login | Sistema Facturacion</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<section id="container">
		<form action="" method="post">
			<h3>Iniciar Sesion</h3>
			<img src="img/lock.png">

			<input type="text" name="usuario" placeholder="Usuario">
			<input type="password" name="clave" placeholder="Contraseña">
			<div class="alert"><?php echo isset($alert)? $alert:''; ?></div>
			<input type="submit" value="Ingresar">
		</form>
		
	</section>
</body>
</html>