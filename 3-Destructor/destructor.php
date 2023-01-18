<!DOCTYPE html>
<html>
<body>

<?php
class Car {
  // Properties
  var $name;
  var $color;

  // Methods
  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color; 
  }
  function __destruct() {
    echo "The car is {$this->name} and the color is {$this->color}."; 
  }
}

$car = new Car("Mercedes", "blue");
?>
 
</body>
</html>
