<!DOCTYPE html>
<html>
    <head>
        <title>exo2</title>
        <meta charset="utf-8" />
    </head>
    <body>
       <p>
       <?php 
       $maVariable = 1;
       $tenta = "";
       $un = 1;
       $quinze = 15;

       while ($maVariable <= 100) {
           echo $maVariable . "On y arrive presque" . "<br>";
           $maVariable = $maVariable + $quinze;
           $tenta = $tenta + $un; 
       }
        echo $tenta;
         ?>
        </p>
    </body>
</html>