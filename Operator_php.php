<!DOCTYPE html>
<html>
<body>

<?php
$x = 10;  
$y = 6;
echo "Arithmetic Operators";
echo "<br>";
echo "- + * / % **";
echo "<br>";

echo "$x + $y";
echo "<br>";
echo $x + $y;
echo "<br>";

echo "$x - $y";
echo "<br>";
echo $x - $y;
echo "<br>";

echo "$x * $y";
echo "<br>";
echo $x * $y;
echo "<br>";

echo "$x / $y";
echo "<br>";
echo $x / $y;
echo "<br>";

echo "$x % $y";
echo "<br>";
echo $x % $y;
echo "<br>";

echo "$x ** $y";
echo "<br>";
echo $x ** $y;
echo "<br>";

//PHP Assignment Operators
$x = 10; 
 
echo $x;
echo "<br>";

// +เพิ่ม
$x = 20;  
$x += 100;

echo $x;
echo "<br>";

//PHP Comparison Operators
$x = 100;  
$y = "100";

var_dump($x == $y);
echo "<br>";
//PHP Increment / Decrement Operators
$x = 10;  
echo ++$x;
echo "<br>";
//PHP Logical Operators
$x = 100;  
$y = 50;

if ($x == 100 and $y == 50) {
    echo "Hello world!";
    echo "<br>";
}

//PHP String Operators
$txt1 = "Hello";
$txt2 = " world!";
echo $txt1 . $txt2;

//PHP Array Operators
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

print_r($x + $y); // union of $x and $y
echo "<br>";

//PHP Conditional Assignment Operators
   // if empty($user) = TRUE, set $status = "anonymous"
   echo $status = (empty($user)) ? "anonymous" : "logged in";
   echo("<br>");

   $user = "John Doe";
   // if empty($user) = FALSE, set $status = "logged in"
   echo $status = (empty($user)) ? "anonymous" : "logged in";


?>  

</body>
</html>
