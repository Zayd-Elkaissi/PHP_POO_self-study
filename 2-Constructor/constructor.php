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

$apple = new Car("Mercedes", "blue");
echo " <span> Name: <span/> " .  $apple->get_name();
echo "<br>";
echo " <span> Color: <span/> " .  $apple->get_color();
?>
 
</body>
</html>
