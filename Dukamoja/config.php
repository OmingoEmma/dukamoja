<?php

$servername='localhost';
$username='root';
$password='';
$db_name='dukamojadb';

$conn =mysqli_connect($servername,$username,$password,$db_name);

if(!$conn){
    die( "connection to the database unsuccessful<br>".mysqli_connect_error());
}

?>

