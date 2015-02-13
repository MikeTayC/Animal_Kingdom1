<?php

  require('Animal.class.php');
  
  class Cat extends Animal
  {
    function sound()      //concrete manipulation is mandatory
    {
      return "Meow!";
    }
  }
  
?>
