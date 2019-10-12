<?php

class mysql {

	function connect()
    {
       global $DB_INFO;

       $connect = mysqli_connect( $DB_INFO['hostname'], $DB_INFO['username'], $DB_INFO['password'],$DB_INFO['database'] );
       return $connect;
    }
        
  
    function query( $info )
    {
        return mysqli_query($this->connect(), $info );
    } 

    function fetch( $info )
    {
        return mysqli_fetch_array( $info );
    } 

    function num( $info )
    {
        return mysqli_num_rows( $info );
    } 
    function affected()
    {
        return mysqli_affected_rows();
    } 
    function close()
    {
        return mysqli_close();
    } 
} 

$db = new mysql;
$result = $db->query( "SELECT * FROM settings" );
while ( $rowz = $db->fetch( $result ) ) {
    $x1 = $rowz['sName'];
    $x2 = $rowz['sValue'];
    $SETTINGS[$x1] = $x2;
} 




?>
