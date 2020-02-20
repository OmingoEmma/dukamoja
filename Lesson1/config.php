<?php
//before using the database we need to connect to database by providing the following info
$servername='localhost';
$username='root';
$password='';
$db_name='mitevening';
//php has helper functions that will make database interaction easy
//to connect to the database use php function called mysqli_connect()
//mysqli function returns a boolean datatype
$conn =mysqli_connect($servername,$username,$password,$db_name);
//check if connection  is sucessful
if(!$conn){
    die( "connection to the database unsuccessful<br>".mysqli_connect_error());
}
else{
    echo"connection was successful<br>";
}
?>
