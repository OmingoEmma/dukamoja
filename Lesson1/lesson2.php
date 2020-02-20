<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title></title>
</head>
<body>
<?php
//Php Data types
//Variables store different data types and they do different things
//Php has the following data types
//1.String
//These are sequence of characters in double quotes or single quotes
echo "Hello World";
echo "Hello World";
echo '<br>';
//String functions
//Code that does repetitive tasks
//strlen is used to count the number of characters in a string
echo strlen( 'Hello world');
$myname = strlen("Emma Odira");
$country ="Kenya";
echo strrev($country);
echo '<br>';
echo $myname;
//counting words in a string:use str_word_count() function
echo '<br>';
$words_in_my_name =str_word_count('Emma Odira');
echo $words_in_my_name;
echo '<br>';
//reversing a string:use strrev() function
$name ="Kobe Byrant";
echo strrev($name);
//Searching an index position within a string:use strpos() funcction
echo '<br>';
echo strpos("I am Kenyan", "Kenyan");
//Replace a text in a string:use str_replace()
echo"<br>";
echo str_replace("Kenyan", 'Ugandan', 'I am Kenyan');
echo '<br>';
//2.Integers
//Non decimal numbers
$numbers_of_cows =18;
echo $numbers_of_cows;
echo '<br>';
var_dump($numbers_of_cows);
echo '<br>';
var_dump($name);
echo '<br>';
echo is_int($numbers_of_cows);
echo '<br>';
echo is_int($name);
echo '<br>';
echo is_integer($numbers_of_cows);
echo '<br>';
echo is_long($numbers_of_cows);
//3.Floats
//Numbers with decimal points
$height=3.5;
echo $height;
echo '<br>';
echo is_float($height);
echo '<br>';
var_dump(is_float($height));
echo '<br>';
is_double($height);
echo '<br>';
//casting/transforming float/changing float to an integer
$volume_float =700.123;
$volume_integer =(int)$volume_float;
echo $volume_integer;
echo '<br>';
$age_string="23";
$age_integer =(int)$age_string;
echo $age_integer;
echo '<br>';
//4.Boolean
//Boolean function is used for logic conditions
$is_tall=true;
$is_lightskin=false;
echo $is_tall;
echo"<br>";
//5.Array
//6.Object
//7.Null

    ?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>





























