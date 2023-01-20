<!DOCTYPE html>
<html>
<body>

<?php
// Parent class
abstract class Car {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  abstract protected function intro() : string; 
}

// Child classes
class Audi extends Car {
  protected function intro() : string {
    return "Choose German quality! I'm an $this->name!"; 
  }

  public function call() {
    return $this->intro();
  }
}

class Volvo extends Car {
  protected function intro() : string {
    return "Proud to be Swedish! I'm a $this->name!"; 
  }
  public function call() {
   return $this->intro();
  }
}

class Citroen extends Car {
  protected function intro() : string {
    return "French extravagance! I'm a $this->name!"; 
  }
  public function call() {
    return $this->intro();
  }
}

// Create objects from the child classes
$audi = new audi("Audi");
echo $audi->call();
echo "<br>";

$volvo = new volvo("Volvo");
echo $volvo->call();
echo "<br>";

$citroen = new citroen("Citroen");
echo $citroen->call();
?>
 
</body>
</html>
