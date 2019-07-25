<!DOCTYPE html>
<html>
    <head>
        <title>exo2</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php 
            $DisplayForm = true;
            if(isset($_POST['submit'])) {
                $DisplayForm = false;
              echo $_POST['civilite'] . "" . $_POST['prenom'] . "" . $_POST['nom'];
            }
            if ($DisplayForm) {

                ?>
                <form action="#" method="post">
                <select name="civilite">
                <option></option>
                <option value="mlle">Mlle</option>
                <option value="mme">Mme</option>
                <option value="mr">Mr</option>
                </select>
                <h2>Prénom</h2>
                <input type="text" name="prenom"/>
                <h2>Nom</h2>
                <input type="text" name="nom"/>
                <input type="submit" name="submit" value="valider">
                 </form> 
                 <?php  
            };
           
            
             ?>
    </body>
</html>