<!doctype html>
<html>
	<head>
	<link rel="stylesheet" href="css/style.css">
		<title>Inicio</title>

	</head>
<body>
 	<div id="contenedor"> 
 	 	<header>
 	<div id="hola">
 	<?php
 	$user = $_POST["user"];
 	echo "<h3>Hola, ". $user."</h3>";
 	 ?><br>
 	 <a href="index.php">Salir</a>
 	 </div>
 		<nav>
 		<ul>
 			<li><a href="#">Inicio</a></li>
 			<li><a href="#">Facturaci&oacuten</a></li>
 			<li><a href="#">Inventario</a></li>
 			<li><a href="#">Clientes</a></li>
 		</ul>

 			
 		</nav>
 	</header>
 	<section id="lado">
 	
 		
 	</section>
 	<section id="central"></section>
 	
 	<footer>
 		
 	</footer>

	</div>
</body>

</html>