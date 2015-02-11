# Animal_Kingdom1
Playing with inheritance.
<?php

//Super class:kingdom
class Animal 
{
    public $cellType = 'Eukaryote';
    public $cellStructures = 'No cell walls/chloroplasts';
    public $numberCells = 'Multicellular';
    public $nutrition = 'Heterotroph';
    public $skinType;
}

//sub class: subphylum
class Vertabrate extends Animal 
{
    public $hasBackbone = true;
    public $laysEggs = true;
    public $livesOnLand = true;
    public $livesInWater = true;
    public $bloodType = 'Warm-blooded';
}

//sub class: subphylum
class Invertabrate extends Animal 
{
    public $hasBackbone = False;
}

//sub sub class: class
class Amphibians extends Vertabrate
{
    public $skinType = 'Moist';
    public $bloodType = 'Cold-blooded';
}

//sub sub class: class
class Mammals extends Vertabrate
{
    public $laysEggs = false;
    public $skinType = 'Hair';
    public $milkProduction = true;
}

//sub sub class: class
class Birds extends Vertabrate
{
    public $skinType = 'Feathers';
}

//sub sub class: class
class Reptiles extends Vertabrate
{
    public $skinType = 'Dry scales';
    public $bloodType = 'Cold-blooded';
}

//sub sub class: class
class Fish extends Vertabrate 
{
    public $skinType = 'Wet scales';
    public $liveOnLand = false;
    public $bloodtype = 'Cold-blooded';
    public $respiration = 'Gills';
}

?>
