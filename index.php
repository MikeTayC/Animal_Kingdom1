<!DOCTYPE html>
<?php
function my_autoloader($class) {
$filename = 'classes/' . $class . '.class.php';
if (is_readable($filename)) {
require $filename;
}
}        
spl_autoload_register('my_autoloader');
if(isset($_POST)) {
switch ($_POST["animal"]) {
case "Cat": $newCat = Cat($_POST['name'])
break;
case "Dog": $newDog = Dog($_POST['name'])
break;
case "Cow": $newCow = Cow($_POST['name'])
break;
default : echo "You didn't pick an animal!";
}    
}
<html>
    <head>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
        <title>ANIMAL MAKER 5000</title>
    </head>
    <body style="margin: 20px;">
        <h1>ANIMAL MAKER 5000</h1>
        <form action="index.php" method="post">
            <fieldset>
                <label class="radio">
                   <input name="animal" type="radio"  value = "Cat" /> Cat
                </label> 
                <label class="radio">
                   <input name="animal" type="radio" value = "Dog" /> Dog
                </label> 
                <label class="radio">
                   <input name="animal" type="radio" value = "Cow" /> Cow
                </label> 
                <label>Name</label>
                <input name="name" type="text"/>
                <input type="submit" values="MAKE"/>
            </fieldset>
         </form>
    </body>
</html>
