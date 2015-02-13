<?php

  abstract class Animal
  {
    public $animalName;
    
    public $sound;
    
    function speak() 
    {
      return strtoupper($sound);
    }
  }
?>
