<!doctype html>
<html>
	<head>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
		<link rel="stylesheet" href="css/bootstrap.min" type="text/css"/>
		<title>Inicio</title>

	</head>
<body>
 	<div id="contenedor"> 
 	 	<header>
 	<div id="hola">
 	<?php
 	/*$user = $_POST["user"];
 	echo "<h3>Hola, ". $user."</h3>";*/
 	 ?><br>
 	 <a href="index.php">Salir</a>
 	 </div>
 		<nav>
 		<ul>
 			<li><a href="#">Inicio</a></li>
 			<li><a href="#">Entradas</a></li>
 			<li><a href="inicio.php?link=1">Vistas</a></li>
 			<li><a href="#">Reportes</a></li>
 		</ul>

 			
 		</nav>
 	</header>
 	<section id="lado">
 	
 		
 	</section>
 	<section id="central">
 		
<?php

if (isset($_GET["link"])) {
	$lin=$_GET["link"];
}


switch ($lin) {
 	case 1:
 		include "vista1.php";
 		break;
 	
 	default:
 		# code...
 		break;
 } 

?>

 	</section>
 	
 	<footer>
 		
 	</footer>

	</div>
</body>

</html>