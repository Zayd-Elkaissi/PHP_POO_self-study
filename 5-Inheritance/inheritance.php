<!DOCTYPE html>
<html>
<body>

<?php
class Car {
  public $name;
  public $color;
  public $price;
  public function __construct($name, $color, $price) {
    $this->name = $name;
    $this->color = $color; 
    $this->price = $price;
  }
  public function intro() {
    echo "The car is {$this->name} and the color is {$this->color},"; 
  }
}

class Mercedes extends Car {
  public function Add() {
    $this->intro();
    echo " and the price is {$this->price}."; 
  }
}

$Mercedes = new Mercedes("Mercedes", "red", '9000$');
$Mercedes->Add();
?>

<!-- The final keyword can be used to prevent class inheritance or to prevent method overriding -->
 
</body>
</html>
