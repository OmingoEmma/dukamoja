<?php
require 'header.php';
require 'config.php';
echo "welcome to details page";
//grab id from url using the $_GET
//BUT first check if id was set
if(isset($_GET['id'])){
    $id = $_GET['id'];// use this id
    $sql = "SELECT `id`, `username`, `firstname`, `lastname`, `email`, `password` FROM `users` WHERE 1";

    $users = mysqli_query($conn, $sql);


    while($row = mysqli_fetch_array($users)){
        $id=$row['id'];
        echo "<a href='details.php?id=$id'>";
        echo $row['id']."<br>";
        echo $row['username']."<br>";
        echo $row['firstname']."<br>";
        echo $row['lastname']."<br>";
        echo $row['email']."<br>";
        echo $row['password']."<br>";
        echo "</a>";
        echo"<a href='' class='btn btn-danger'>Delete the page</a>; 
    }

}

require 'footer.php';
?>
