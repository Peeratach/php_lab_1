<!DOCTYPE html>
<html>
<body>

<?php 
//String
$x = "Hello world!";
$y = 'Hello world!';
echo "String"; 
echo "<br>"; 
echo $x;
echo "<br>"; 
echo $y;


//Integer
echo "<br>"; 
echo "Integer"; 
echo "<br>"; 
$x = 5985;
var_dump($x);

//Float
echo "<br>"; 
echo "Float "; 
echo "<br>"; 
$x = 10.365;
var_dump($x);

//Boolean
echo "<br>"; 
echo "Boolean"; 
echo "<br>"; 
$x = true;
$y = false;

//Array
echo "<br>"; 
echo "Array"; 
echo "<br>"; 
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);

//Obj
echo "<br>"; 
echo "Object"; 
echo "<br>"; 
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }
  
  $myCar = new Car("black", "Volvo");
  echo $myCar -> message();
  echo "<br>";
  $myCar = new Car("red", "Toyota");
  echo $myCar -> message();

//Null Value
echo "<br>"; 
echo "Null Value"; 
echo "<br>"; 
$x = "Hello world!";
$x = null;
var_dump($x);
?>
</body>
</html>