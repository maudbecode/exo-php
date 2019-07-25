<!DOCTYPE html>
<html>
    <head>
        <title>exo2</title>
        <meta charset="utf-8" />
    </head>
    <body>
       <p>
            <?php 
            $prix_initial = 785;
            $ristourne = (785/100) * 30;
            $result = $prix_initial - $ristourne;
            echo $prix_initial  . "<br>" . $ristourne . "<br>" . $result;
             ?>
        </p>
    </body>
</html>