<?php

echo "Hello World!";

$name = "John";

$firstName = 'Nuwan' ;
$_age = 23;
echo '<br>';
echo "Hello ".$name;

$name = "Kamal";
echo '<br>';
echo "Hello ".$name;

echo '<hr>';

CONST NUMBER_OF_STUDENTS = 50;
echo NUMBER_OF_STUDENTS;

echo '<hr>';

$a = 5;
$b = 10;
$c = 3;

$total = $a + $b;
print($total);
echo '<br>';

print($a+$c);
echo '<br>';

print($a-$c);
echo '<br>';

print($a*$c);
echo '<br>';

print($a/$c);
echo '<br>';

print($a%$c);
echo '<br>';

print($a**$c);
echo '<br>';

echo '<hr>';

$string = "Some text content";
$integer = 45;
$float = 1.5;
$boolean = true; //false, 0, 1, null
$array = array(
    'Nuwan',
    'kamal',
    'sanjaya'
);
$array2 = [
    'Nuwan',
    'kamal',
    'sanjaya'
];

print($boolean);
print_r($array2);

echo '<hr>';

echo strlen($string);
echo '<br>';

echo str_word_count($string);
echo '<br>';

echo str_word_count("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.");


echo '<hr>';
// Numbers 
/*
 multi 
 line 
 comment
 */
var_dump($array);
echo '<br>';

var_dump(is_int($a));
echo '<br>';

var_dump(is_float($float));
echo '<br>';

var_dump(acos(8));
echo '<br>';

$num = "888.85";
$num2 = $a + $num;

var_dump(is_numeric($num2));
var_dump($num2);

echo '<br>';

$num = "45";
var_dump($num);

echo " ";

$int = (int)$num;
var_dump($int);

echo '<br>';

$num = "45.687";
var_dump($num);

echo " ";

$int = (int)$num;
var_dump($int);

$fl = (float)$int;
var_dump($fl);


echo '<br>';

$num = "45.687";
var_dump($num);

echo " ";

$int = intval($num);
var_dump($int);

$fl = floatval($int);
var_dump($fl);

echo '<hr>';

var_dump (rand(100,999));
echo '<br>';

$circle = 2*pi()*7;
echo $circle


?>