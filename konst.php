<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name,$color) {
    $this->name = $name;
    $this->color=$color;
  }
  function getName() {
    return $this->name;
  }
  function getColor() {
    return $this->color;
  }
}

$apple = new Fruit("Apple","Red");
echo $apple->getName();
echo "<br>";
echo $apple->getColor();
echo $apple->color;
?>