<?php
  require('Animal.class.php');
  
  class Cow extends Animal
  {
    function sound()      //concrete manipulation is mandatory
    {
      return "Moo!";
    }
  }
  
?>
