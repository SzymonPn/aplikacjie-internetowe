<?php
class Fruit1 {
  public $name;
  protected $color;
  private $weight;
}

$mango = new Fruit1();
$mango->name = 'Mango'; // OK
$mango->color = 'Yellow'; // ERROR
$mango->weight = '300'; // ERROR
?>