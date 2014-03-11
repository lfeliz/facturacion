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
 	$user = $_POST["user"];
 	echo "<h3>Hola, ". $user."</h3>";
 	 ?><br>
 	 <a href="index.php">Salir</a>
 	 </div>
 		<nav>
 		<ul>
 			<li><a href="#">Inicio</a></li>
 			<li><a href="#">Entradas</a></li>
 			<li><a href="#">Vistas</a></li>
 			<li><a href="#">Reportes</a></li>
 		</ul>

 			
 		</nav>
 	</header>
 	<section id="lado">
 	
 		
 	</section>
 	<section id="central">
 		
<?php 
$link= mysqli_connect("localhost","adminv","inv123","inventario") or die ("Error".mysqli_error($link));
$query="SELECT * from equipos LIMIT 0 , 30";
$result= $link->query($query);
/*while($row = mysqli_fetch_array($result)) {
  echo $row["posicion"] . "<br>";
  echo $row["departamento"] . "<br>";
}*/

?>
<table class="table table-striped">
<tr>
<td>Nombre</td>
<td>Ip</td>
<td>Tipo</td>
</tr>
<tr>

<?php
while($row = mysqli_fetch_array($result))
{
echo "<td>".$row["Nombre"]."</td>";
echo "<td>".$row["IP"]."</td>";
echo "<td>".$row["Tipo"]."</td></tr>";

}
?>
</tr></table>
 	</section>
 	
 	<footer>
 		
 	</footer>

	</div>
</body>

</html>