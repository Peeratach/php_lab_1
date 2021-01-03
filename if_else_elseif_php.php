<!DOCTYPE html>
<html>
<body>

<?php
//PHP - The if Statement
$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
  echo "<br>";
}

//The if...else Statement
$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
  echo "<br>";
} else {
  echo "Have a good night!";
  echo "<br>";
}

//The if...elseif...else Statement
$t = date("H");

if ($t < "10") {
  echo "Have a good morning!";
  echo "<br>";
} elseif ($t < "20") {
  echo "Have a good day!";
  echo "<br>";
} else {
  echo "Have a good night!";
  echo "<br>";
}
?>
 
</body>
</html>
