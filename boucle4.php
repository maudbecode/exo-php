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
       $var2 = 2;

       while ($maVariable <= 10) {
           echo $maVariable + ($maVariable / $var2) . "<br>";
           $maVariable++;
       }
         ?>
        </p>
    </body>
</html>