<!DOCTYPE html>
<html>
    <head>
        <title>exo2</title>
        <meta charset="utf-8" />
    </head>
    <body>
       <p>
       <?php 
       $mois = array ("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "decembre");
         echo $mois[2] . "<br>";
         echo $mois[4] . "<br>";
         $mois[8] = août;
         echo $mois[8] . "<br>";
         ?>
        </p>
    </body>
</html>