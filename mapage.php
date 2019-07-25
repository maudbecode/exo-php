<?php
session_start(); 
?>
 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Titre de ma page</title>
    </head>
    <body>
    <p>Hi again !</p>
    <p>
        <?php echo $_SESSION['prenom'] . ' ' . $_SESSION['nom']; ?> :-)<br />
       Your age is <?php echo $_SESSION['age']; ?> , are you sure ?
    </p>
    </body>
</html>