<!DOCTYPE html>
<html>
    <head>
        <title>exo2</title>
        <meta charset="utf-8" />
    </head>
    <body>
       <p>
       <?php 
       $maVariable = 200;
       $tenta = "";
       $un = 1;
       $douze = 12;

       while ($maVariable >= 0) {
           echo $maVariable . "On y arrive presque" . "<br>";
           $maVariable = $maVariable - $douze;
           $tenta = $tenta + $un; 
       }
        echo $tenta;
         ?>
        </p>
    </body>
</html>