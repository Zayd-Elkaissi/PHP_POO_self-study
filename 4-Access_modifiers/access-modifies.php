<?php
class Fruit {
  public $name;
  public $color;
  public $weight;

  function set_name($name) {  // a public function (default)
    $this->name = $name;
  }
  protected function set_color($color) { // a protected function
    $this->color = $color;
  }
  private function set_weight($weight) { // a private function
    $this->weight = $weight;
  }
}

$mango = new Fruit();
$mango->set_name('Mango'); // OK
$mango->set_color('Yellow'); // ERROR
$mango->set_weight('300'); // ERROR
?>