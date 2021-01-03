<!DOCTYPE html>
<html>
<body>

<?php
//integer
$x = 5985;
echo $x; 
echo "<br>";
var_dump(is_int($x));
echo "<br>";
$x = 59.85;
echo $x; 
echo "<br>";
var_dump(is_int($x));
echo "<br>"; 

//Floats
$x = 10.365;
echo $x; 
echo "<br>";
var_dump(is_float($x));
echo "<br>";

//Infinity
echo $x; 
echo "<br>";
$x = 1.9e411;
var_dump($x);
echo "<br>";

//NaN
$x = acos(8);
echo $x; 
echo "<br>";
var_dump($x);

//Numerical Strings
$x = 5985;
echo $x; 
echo "<br>";
var_dump(is_numeric($x));

$x = "5985";
echo $x; 
echo "<br>";
var_dump(is_numeric($x));

$x = "59.85" + 100;
echo $x; 
echo "<br>";
var_dump(is_numeric($x));

$x = "Hello";
echo $x; 
echo "<br>";
var_dump(is_numeric($x));

// Casting Strings and Floats to Integers
// แปลง float เป็น int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// แปลง string เป็น int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
?>  

</body>
</html>
