<?php
//superglobals
//some predefined variables in PHp are 'Superglobal" which means that they are always accessible
//regardless of the scope and you can access them from any function class without having to do anything special
//The php superglobal variables are
//$_SERVER
//$_REQUEST
//_POST
//_GET
//_FILES
//_COOKIE
//_ENV
//_SESSION
//1.$_SERVER
//Has information for paths ,headers
// syntax:$_SERVER['Element']
//find the location of the php file
echo$_SERVER['PHP_SELF'],'<br>';
//finding the name of the host
echo $_SERVER['SERVER_NAME'],'<br>';
//finding request method

//collect data using the $_REQUEST
echo $_SERVER['REQUEST_METHOD'],'<br>';
if($_SERVER['REQUEST_METHOD']=="POST"){
    $name= $_REQUEST['jina'];
    $email= $_REQUEST['arafa'];
    echo 'USING THE $_POST []';
    echo "NAME IS $name and EMAIL is $email<br>";

}
?>
<h1>Collecting data using the $_Request</h1>
<form action="lesson8.php" method="post">
    <input type="text" name="jina"placeholder="Enter the name..">
    <input type="email" name="arafa"placeholder="Enter the email..">
    <input type="submit" value="send data">
</form>
<h1>Collecting data using the $_POST</h1>
<!--we use the $_POST to collect data from form using the post method-->
<!--$_GET: Used to send data sent via the url-->

<?php
//Receiving data using $_GET
$the_name=$_GET['name'];
$the_age=$_GET['age'];
echo "$the_name <br>";
echo "$the_age <br>";
?>

<a href="lesson8.php?name=Faith&age=23">send</a>
<!--&separate two variables or names-->
<!--? what data to display-->
