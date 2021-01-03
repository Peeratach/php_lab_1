<!DOCTYPE html>
<html>
<body>

<?php
// คีย์เวริ์ด ห้ามซ้ำกัน
// case-sensitive constant name
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
echo "<br>";
//Constant Arrays
define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
  ]);
  echo cars[0];
  echo "<br>";
//Constants are Global
define("AB", "Welcome to W3Schools.com!");

function myTest() {
  echo AB;
  echo "<br>";
}
 
myTest();

?> 

</body>
</html>
