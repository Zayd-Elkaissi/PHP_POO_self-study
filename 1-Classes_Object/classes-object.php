<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {

  // Properties
  public $name;
  public $color;

  // Methods

  function set_color($color) {
    $this->color = $color;
  }

  function get_color() {
    return $this->color;
  }

  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit();
$apple->set_name('Apple');
$apple->set_color('Green');

// to check if an object 
 var_export ($apple instanceof Fruit);

echo " <span> Name: <span/> " . $apple->get_name();
echo "<br>";
echo " <span> Color: <span/> " . $apple->get_color();
?>
 
</body>
</html>