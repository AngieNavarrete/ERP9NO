<?php 
	session_start();
	if(!isset($_SESSION["autenticado"])){
		header("Location: index.php");
	}
 ?>
 <!DOCTYPE html>
 <html>
 	<head>
 		<title>ERP</title>
 		<link rel="stylesheet" href="css/estilos.css">
 		<script src="js/Chart.min.js"></script>
 	</head>
 	<body>
 		<section>
 			<nav>
 	<h2>Bienvenido: <?php echo $_SESSION["usuario"]; ?></h2>
 				<ul>
 			<a href="?sec=inicio"><li>Inicio</li></a>
 			<a href="?sec=usu"><li>Usuario</li></a>
 			<a href="?sec=pro"><li>Producto</li></a>
 			<a href="?sec=cerrar"><li>Cerrar Sesión</li></a>
 				</ul>
 			</nav>
 			<article>
 				<?php 
 	if(isset($_GET["sec"])){
 		$sec = $_GET["sec"];
 		switch ($sec) {
 			case 'usu':
 				require_once("php/vistaUsuario.php");
 				break;
 			case 'pro':
 				require_once("php/vistaProducto.php");
 				break;
 			case 'cerrar':
 				session_destroy();
 				header("Location: index.php");
 				break;
 		}
 	}
 				 ?>		
 			</article>
 		</section>
 	</body>
 </html>