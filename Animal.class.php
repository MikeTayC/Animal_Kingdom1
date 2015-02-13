<?php

  abstract class Animal
  {
    abstract public $animalName;
    
    abstract public $sound;
    
    function speak() 
    {
      return strtoupper($sound);
    }
  }
?>
