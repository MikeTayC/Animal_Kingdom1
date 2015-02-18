<!DOCTYPE html>
<?php
    if(isset($_POST))
    {
        function __autoload($filename)  
        {
            require_once $filename . '.php';
        }
    }
?>
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
                   <input name="Animal" type="radio"  value = "Cat.class" /> Cat
                </label> 
                <label class="radio">
                   <input name="Animal" type="radio" value = "Dog.class" /> Dog
                </label> 
                <label class="radio">
                   <input name="Animal" type="radio" value = "Cow.class" /> Cow
                </label> 
                <label>Name</label>
                <input name="name" type="text"/>
                <input type="submit" values="MAKE"/>
            </fieldset>
         </form>
    </body>
</html>
