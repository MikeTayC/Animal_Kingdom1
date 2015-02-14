<!DOCTYPE html>

<html>
    <head>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
        <title>ANIMAL MAKER 5000</title>
    </head>
    <body style="margin: 20px;">
        <h1>ANIMAL MAKER 5000</h1>
        <form action="maker.php" method="post">
            <fieldset>
                <label class="checkbox">
                   <input name="cat" type="checkbox"/> Cat?
                </label> 
                <label class="checkbox">
                   <input name="dog" type="checkbox"/> Dog?
                </label> 
                <label class="checkbox">
                   <input name="cow" type="checkbox"/> Cow?
                </label> 
                <label>Name</label>
                <input name="name" type="text"/>
                <input type="submit" values="MAKE"/>
            </fieldset>
         </form>
    </body>
</html>
