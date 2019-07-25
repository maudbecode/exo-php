<!DOCTYPE html>
<html>
    <head>
        <title>exo2</title>
        <meta charset="utf-8" />
    </head>
    <body>
       <p>
       <?php 
       $prenoms = array ("Alex", "Max", "Dominique", "Claude", "Leslie", "Charlie", "Lou");
          
       
       for ($numero = 0; $numero < 7; $numero++) 
       {
           echo  "Salut " . $prenoms[$numero] . " ,devine quoi! Je me marie dans samedi dans deux semaines ! J'espère te compter parmi les invités ! Gros bisous :)<br>";
       }
         ?>
        </p>
    </body>
</html>