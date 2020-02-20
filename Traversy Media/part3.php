<?php

//Single line comment
# Single line comment
/*
 Multiline comment
 */

#VARIABLES
/*
    -Prefix $
    -Start with ha a letter or an underscore
    -Only letters,numbers and underscores
    -Case Sensitive
 */
    #DATA TYPES
/*
    String
    Integers
    floats
    Booleans
    Arrays
    Objects
    NULL
    Resource
 */
$_output = 'Hello World';
$num1= 4;
$num2= 10;
$sum=$num1 + $num2 ;

$string1='Hello';
$string2='World';
$greetings=$string1 .' '.$string2 .'!';
$greetings2="$string1 $string2";
$float1=4.4;
$bool1 =true;
echo $sum ."<br>";
echo $greetings ."<br>";
echo $greetings2 ."<br>";

 echo $string3 ='They\'re here'."<br>";
// consants are case sensitive
 define('GREETING','Hello everyone',true);
 echo greeting;

    ?>
