
 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Titre de ma page</title>
    </head>
    <body>
    <?php
    if(isset($_POST['login']) && ($_POST['mdp']))
{
    setcookie("login", $_POST['login'], time() + 365*24*3600, null, null, false, true);
    setcookie("mdp", $_POST['mdp'], time() + 365*24*3600, null, null, false, true);
    header("Location: cookie.php");
}
?>

    <form method="post">
       <p>
       <h2>Identifiant</h2>
       <input type="text" name="login" id="login" value="<?php if(isset($_COOKIE['login'])) echo $_COOKIE['login'];?>"/>
       <h2>Mot de passe</h2>
       <input type="password" name="mdp" id="mdp" value="<?php if(isset($_COOKIE['mdp'])) echo $_COOKIE['mdp'];?>"/>
       <input type="submit" value="valider">
        </p>
        </form>
    </body>
</html>