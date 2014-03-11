<table class="table table-striped">
<tr>
<?php
if(isset($_GET["link"]))
{
$lin=$_GET["link"];
echo $lin;}


$link= mysqli_connect("localhost","adminv","inv123","inventario") or die ("Error".mysqli_error($link));



$query="SELECT * from equipos LIMIT 0 , 30";
$result= $link->query($query);
/*while($row = mysqli_fetch_array($result)) {
  echo $row["posicion"] . "<br>";
  echo $row["departamento"] . "<br>";
}*/

?>


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
<!--switch ($link) {
	case 1:	

	include "vista1.php";

	break;
	
	default:
		# code...
		break;
}*/

?>-->
</tr></table>