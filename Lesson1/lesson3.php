<?php
//Php operators:used to perform operation on variables and values
//1.Arithmetic ops
//used with numerical values
//1.+ Addition
echo 4+4;
echo '<br>';
$sum=4+6;
echo "The sum of 4 and 6 is".$sum;
//2.- Minus
echo '<br>';
echo 4-3;
echo '<br>';
$sub=8-6;
echo "The subtarction of 8 and 6 is " .$sub;
//3.* Mult
echo '<br>';
echo 4*3;
echo '<br>';
$prod=8*6;
echo "The multiplication of 8 and 6 is " .$prod;
//4./ Div
echo '<br>';
echo 12/4;
echo '<br>';
$div=8/2;
echo "The division of 8 and 2 is " .$div;
//5.%modulus
echo '<br>';
echo 4%3;
echo '<br>';
$mod=8%2;
echo "The modulus of eight and two is " .$mod;
//**Exponential
echo '<br>';
echo 12**2;
echo '<br>';
$expo=8**2;
echo "The exponential of 8 and 12 is  " .$expo;
//2.Assignment3
//used to assign values to variables
//=:
$gender='Female';
//+= addition assignment
echo "<br>";
$a=100;
$b=200;
$a=$a+$b;
//content on the right is added is to the left thus the addition code below adds up to 500
echo "<br>";
$a+=$b;
echo $a;
echo"<br>";
echo "subtraction";
echo "<br>";
$a-=$b;
echo $a;
echo"<br>";
echo "multiplication";
echo "<br>";
$a*=$b;
echo $a;
echo"<br>";
echo "division";
echo "<br>";
$a/=$b;
echo $a;
echo"<br>";
echo "modulus";
echo "<br>";
$a%=$b;
echo $a;
echo"<br>";
echo "exponential";
echo "<br>";
$a**=$b;
echo $a;
echo"<br>";
//3.Comparison
//used to compare two values
//COMPARISON OPS RETURN A BOOLEAN DATA TYPE ONLY
//1.==equals:Returns true if two values are equal
$x =10;
$y =10;
$check = $x == $y;//Returns true
var_dump($check);
echo "Checks if $x and $y are equal";
echo "<br>";
//Data from the database
$db_username ="John Doe";
$db_password ="1234pass";
echo "<br>";
//Data from the user
$username ="John Doe";
$password ="1234pass";
//check if data from the user matches the data from the database:user ==ops
$auntheticate=$username==$db_username;//returns true
var_dump($auntheticate);
echo "<br>";
//change username
$username="Kevindoe";
$auntheticate=$username==$db_username;//returns true
var_dump($auntheticate);
echo"<br>";
//Triple assignment:===:identical:returns two values or variables are equal and of the the same data type
$check =$username==="John Doe";
var_dump($check);
echo"<br>";
//3.!= not equal to:returns true if the one variable is not equal to another variable
$email ="example@example.com";
$check=$email!="johndoe@gmail.com";
echo"<br>";
//4.!==:not identical :returns true if one variable are is not eqaul toto another variable
//or they are of the same the data type
$name="Kevin doe";//String
$age=21;//Integer
$check=$name!==$age;//returns true
var_dump($check);
echo"<br>";
$check= 21 ==="21";
var_dump($check);
echo"test";
echo"<br>";
//5.>greater than:returns if a variable value is greater than the other
$check ='3'>'2';
var_dump($check);//returns true
echo"<br>";
//5.>less than:returns if a variable value is less than the other
$check=3<2;
var_dump($check);//returns false
echo"<br>";
//4.Logical operators
//The Php logical operators are used to combine conditional statements
//1.and:return true if both conditions are true
echo"<br>";
$check=100==100 and 200==200;
var_dump($check);
echo"<br>";
$age=18;
$country="Kenya";
$check =$age ==17 and $country =="Kenya";
var_dump($check);
echo"<br>";
//2.or :return true if either one of the condition is true
$check =$age ==17 or $country =="Kenya";
var_dump($check);
echo"<br>";
//Read about conditional statements  and for loops




?>
