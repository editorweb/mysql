<?php
$hostname = 'localhost';
$database = 'plataforma';
$username = 'root';
$password = '12345678';

//$conn = mysqli_connect($hostname, $username,$password, $database);
//*
$mysqli = new mysqli($hostname, $username,$password, $database);
if ($mysqli->connect_error) {
die( "Fallo la conexión a MySQL: (" . $mysqli->mysqli_connect_errno() 
. ") " . $mysqli->mysqli_connect_error());
}
//*/
/*
try {
$con = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password);
print "Conexión exitosa!";
}
catch (PDOException $e) {
print "¡Error!: " . $e->getMessage() . "
";
die();
}
$con =null;
*/



?>
