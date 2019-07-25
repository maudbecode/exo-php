<!DOCTYPE html>
<html>
    <head>
        <title>exo2</title>
        <meta charset="utf-8" />
    </head>
    <body>
       <p>
       <?php 
       function numb($guess, $guess2)
       {
       if ($guess > $guess2)
       {
            echo "Le premier nombre est plus grand";
       }
       else if ($guess < $guess2)
       {
            echo "Le premier nombre est plus petit";
       }
       else if ($guess == $guess2)
       {
           echo " Les deux nombres sont identiques";
       }
       }
       numb(20, 20);
         ?>
        </p>
    </body>
</html>