<?php
include("config.php");
$query = "SELECT * FROM usuarios";
print("<table>");
$resultado=$mysqli->query($query);
while ($rows = $resultado->fetch_assoc()) {
$query = "SELECT * FROM amigos WHERE id1=".$rows["id"]." OR id2=".$rows["id"];
$amigos=$mysqli->query($query);
print("<tr>");
print("<td>".$rows["id"]."</td>");
print("<td>".$rows["nombre"]."</td>");
print("<td>".$rows["telefono"]."</td>");
print("<td>".$rows["email"]."</td>");
print("<td>");
while ($friend = $amigos->fetch_assoc()) {
	$query = "SELECT * FROM usuarios WHERE id=".$friend["id1"];
  $fish=$mysqli->query($query);
  $oreo = $fish->fetch_assoc();
 	if($oreo["id"]!=$rows["id"]){
	$otreo = $oreo["nombre"];
	print($otreo);
	print("<br>");
	}
	$query = "SELECT * FROM usuarios WHERE id=".$friend["id2"];
  $fish=$mysqli->query($query);
  $oreo = $fish->fetch_assoc();
 	if($oreo["id"]!=$rows["id"]){
	$otreo = $oreo["nombre"];
	print($otreo);
	print("<br>");
	}
}
print("</td>");
print("</tr>"); 
}
print("</table>");
$resultado->free();
$mysqli->close();
?>
