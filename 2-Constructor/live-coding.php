<!DOCTYPE html>
<html>
<body>

<?php
class Car {
  public $name;
  public $color;

  function __construct($name, $color) {
    $this->name = $name; 
    $this->color = $color; 
  }
  function get_name() {
    return $this->name;
  }
  function get_color() {
    return $this->color;
  }
}

$car = new Car('Mercedes', 'red');
echo "Name " .  $car->get_name();
echo "<br>";
echo "Color " .  $car->get_color();
?>
 
</body>
</html>
