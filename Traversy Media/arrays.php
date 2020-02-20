<?php
#Array - variable that holds multiple value
/*
  -index
  -Associative
  -Multi- dimensional
 */
// Indexed
$people = array('Kevin','Joe','Sara');
echo $people[1]."<br>";
$ids = array(23,55,12);
echo $ids[2]."<br>";
$cars =['Honda','Toyota','Ford'];
echo $cars[1]."<br>";
$cars[3]='Benz';
$cars[]='BMW';
//knowing how many items you have on your array

echo count($cars)."<br>";
//printing the whole list of arrays
print_r($cars)."<br>";

//Knowing the data type in an array and can be used in other variables
var_dump($cars);

//Associative arrays
$people= array('Brad'=> 35,'Jose'=> 32,'William'=>37);
$ids=[22=>'Brad',44=>'Jose',63=>'William'];

echo $people['Brad']."<br>";
echo $ids[22]."<br>";
echo $people['Jill']=42 ."<br>";
echo $people['Jill'] ."<br>";
print_r($people)."<br>";
var_dump($people) ."<br>";

//Multi-dimensional- its an array within an  array
$cars=array(
    array('Honda',20,10),
    array('Toyota',30,10),
    array('Ford',23,12),
);
echo $cars[1][2];





?>