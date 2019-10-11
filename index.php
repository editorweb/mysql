<?php
include("config.php");

$query = "SELECT * FROM usuario";
print("<table>");
//$resultado = mysqli_query($conn, $query);
$resultado=$mysqli->query($query);
//$resultado = $con->query($query); 

foreach ($resultado as $rows) { 
//while ($rows = mysqli_fetch_assoc($resultado)){
//while ($rows = $resultado->fetch_assoc()) {
print("<tr>");
print("<td>".$rows["id"]."</td>");
print("<td>".$rows["nombre"]."</td>");
print("<td>".$rows["telefono"]."</td>");
print("<td>".$rows["email"]."</td>");
print("</tr>"); 
}
print("</table>");

$resultado->free();
$mysqli->mysqli_close();

?>
