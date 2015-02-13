<?php

  abstract class Animal
  {
    public $animalName = "";
    
    function speak() 
    {
      $sound = $this->sound();  //exists in child class by "contract"
      return strtoupper($sound);
    }
    
    abstract public $sound;    //"contract"
  }
?>
