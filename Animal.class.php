<?php

  abstract class Animal
  {
    function speak() 
    {
      $sound = $this->sound();  //exists in child class by "contract"
      return strtoupper($sound);
    }
    
    abstract function sound();
  }
?>
