<?php
function eb($s){
    echo $s;
    echo '<br>';
}
function h(){
    echo '<hr>';
}

$a = 5;
eb($a);

// $a = $a + 2;
$a += 2;
eb($a);

$a -= 2;
eb($a);

$a *= 2;
eb($a);

$a /= 2;
eb($a);

$a %= 2;
eb($a);

h();

$strA = "aaaaaaaaaaaaaaa";
$strB = "bbbbbbbbbbbbbb";

$str = $strA.' '.$strB.$strA;

eb($str);

$out = '<h1>';
$out .=$str;
$out .='</h1>';
eb($out);

h();

$a = 45;

if(is_float($a)){
    eb('$a is a float');
}else{
    eb('$a is not a float');
}

if(is_numeric($a)){
    eb('$a is numeric');
}elseif(is_string($a)){
    eb('$a is a string');
}elseif(is_float($a)){
    eb('$a is a float');
}else{
    eb('$a is not a string or a float');
}

h();

$a = "45";

$strNum = is_string($a) and is_numeric($a);
// $logic = is_string($a) && is_float($a);

// var_dump($strNum);

$intFl = is_int($a) || is_float($a);

// var_dump($intFl);

if($strNum){
    eb('$a is a string and a number');
}

if($intFl){
    eb('$a is an integer or a float');
}
h();

$x=5;
$y=10;
$z=5;

$p="5";
$q="10";
$r="5";

if($x==$z){
    eb('$x is equal to $z');
}

if($x==$p){
    eb('$x is equal to $p');
}

if($x===$z){
    eb('$x\'s value and type equals to $z');
}

if($x===$p){
    eb('$x\'s value and type equals to $p');
}else{
    eb('$x\'s value and type is not equal to $p');
}

if($x!=$y){
    eb('$x is not equal to $y');
}

if($x!=$q){
    eb('$x is not equal to $r');
}

if($x!==$y){
    eb('$x\'s value and type is not equal to $y');
}

if($x!==$q){
    eb('$x\'s value and type is not equal to $q');
}else{
    eb('$x\'s value and type equals to $q');
}

if($x!==$p){
    eb('$x\'s value and type is not equal to $p');
}else{
    eb('$x\'s value and type equals to $p');
}

if($x<$y){
    eb('$x is less than $y');
}

if($x<$q){
    eb('$x is less than $q');
}

if($x>$y){
    eb('$x is greater than $y');
}

if($x<=$z){
    eb('$x is less than or equal to $z');
}

if($x<=5){
    eb('$x is less than or equal to 5');
}

if($x>=15){
    eb('$x is greater than or equal to 15');
}

h();
$mark = 75;

if($mark>=75){
    eb('A');
}elseif($mark>=65){
    eb('B');
}elseif($mark>=55){
    eb('C');
}elseif($mark>=45){
    eb('S');
}else{
    eb('F');
}

h();

if($mark<=35){
    eb('F');
}elseif($mark<=45){
    eb('S');
}elseif($mark<=55){
    eb('C');
}elseif($mark<=65){
    eb('B');
}else{
    eb('A');
}


?>