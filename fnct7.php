<!DOCTYPE html>
<html>
    <head>
        <title>exo2</title>
        <meta charset="utf-8" />
    </head>
    <body>
       <p>
       <?php 
       function genderAge($age, $genre)
       {
            if ($age >= 18 && $genre == "homme")
            {
                echo "Vous êtes un homme et vous êtes majeur";
            }
            else if ($age < 18 && $genre == "homme")
            {
                echo "Vous êtes un homme et vous êtes mineur";
            }
            else if ($age >= 18 && $genre == "femme")
            {
                echo "Vous êtes une femme et vous êtes majeur";
            }
            else if ($age < 18 && $genre == "femme")
            {
                echo "Vous êtes une femme et vous êtes mineur";
            }
       }
       genderAge(17, "homme");
         ?>
        </p>
    </body>
</html>