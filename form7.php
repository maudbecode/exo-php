<!DOCTYPE html>
<html>
    <head>
        <title>exo2</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php 
            $DisplayForm = true;
            if(isset($_POST['submit'])){
                $DisplayForm = false;
                if (isset($_FILES['avatar'])) {
              echo $_POST['civilite'] . "" . $_POST['prenom'] . "" . $_POST['nom'] . "" . $_FILES['avatar']['name'];
            }
        }
            
            if ($DisplayForm) {

                ?>
                <form action="upload.php" method="post" enctype="multipart/form-data">
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
                <h2>Téléchargez votre cv</h2>
                <input type="file" name="avatar">
                <br>
                <input type="submit" name="submit" value="valider">
                 </form> 
                 
                 <?php  
            };
            
            
             ?>
    </body>
</html>