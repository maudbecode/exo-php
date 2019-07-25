<!DOCTYPE html>
<html>
    <head>
        <title>exo2</title>
        <meta charset="utf-8" />
    </head>
    <body>
       <p>
       <?php 
       //exos formulaire
            echo $_POST["civilite"] . " " . $_POST["prenom"] . " " . $_POST["nom"];
    
       //exos URL
        echo $_GET['prenom'] . " " . $_GET["nom"];

        if (isset($_GET["age"])) 
        {
            echo $_GET["age"];
        }
        else {
            echo "404 error";
        }

        if (isset($_GET["dateDebut"]) && isset($_GET["dateFin"])) 
        {
           echo $_GET["dateDebut"] . $_GET["dateFin"];
        }

        if (isset($_GET["langage"]) && isset($_GET["serveur"])) 
        {
           echo $_GET["langage"] . $_GET["serveur"];
        }

        if (isset($_GET["semaine"])) 
        {
            echo $_GET["semaine"];
        }

        if (isset($_GET["batiment"]) && isset($_GET["salle"])) 
        {
           echo $_GET["batiment"] . $_GET["salle"];
        }


         ?>
        </p>
    </body>
</html>