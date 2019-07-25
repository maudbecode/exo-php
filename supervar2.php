<?php
session_start();

$_SESSION['prenom'] = 'Etienne';
$_SESSION['nom'] = 'Durant';
$_SESSION['age'] = 4;

?>
<!DOCTYPE html>
<html>
    <head>
        <title>title</title>
        <meta charset="utf-8" />
    </head>
    <body>
    <p>
    Hello <?php echo $_SESSION['prenom']; ?> !<br />
        Your are at home (page). Do you want to be lost ? Check the other page! 
    </p>
    <p>
        <a href="mapage.php">Come here</a><br/>
    </p>
    </body>
</html>