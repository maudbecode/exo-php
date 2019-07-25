<!DOCTYPE html>
<html>
    <head>
        <title>exo2</title>
        <meta charset="utf-8" />
    </head>
    <body>
       <p>
       <?php 
       $maVariable = 20;
       $tenta = "";
       $un = 1;

       while ($maVariable >= 0) {
           echo $maVariable . "On y arrive presque" . "<br>";
           $maVariable--;
           $tenta = $tenta + $un; 
       }
        echo $tenta;
         ?>
        </p>
    </body>
</html>