
 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Titre de ma page</title>
    </head>
    <body>
    <p>
    Hello !<br />
    Voici ton login :  <?php echo $_COOKIE['login']; ?> et ton mot de passe : <?php echo $_COOKIE['mdp']; ?>, n'oublie pas de les enregistrer!
    </p>
    <p>
        <a href="supervar3.php">Try again</a><br/>
    </p>
    </body>
</html>