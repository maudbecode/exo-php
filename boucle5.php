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

       while ($maVariable <= 15) {
           echo "On y arrive presque" . "<br>";
           $maVariable++;
           $tenta = $tenta + $un; 
       }
        echo $tenta;
         ?>
        </p>
    </body>
</html>