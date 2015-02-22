<?php

  require('Animal.class.php');
  
  class Cat extends Animal
  {
    $this->sound = "Meow!";
  }
  
  public function __construct($name)
  {
    this->animalName = $name;
  }
  
?>
