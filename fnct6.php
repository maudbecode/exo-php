<!DOCTYPE html>
<html>
    <head>
        <title>exo2</title>
        <meta charset="utf-8" />
    </head>
    <body>
       <p>
       <?php 
       function helloYou($prenom, $nom, $age)
       {
            echo "Bonjour " . $prenom . " ". $nom . " " . $age . " !";
       }
       helloYou("Dorian", "Gray", 16);
         ?>
        </p>
    </body>
</html>