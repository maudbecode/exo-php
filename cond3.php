<!DOCTYPE html>
<html>
    <head>
        <title>exo2</title>
        <meta charset="utf-8" />
    </head>
    <body>
       <p>
       <?php 
      $age = 36;
      $genre = "homme";
      if ($age >= 18 && $genre == "homme")
      {
          echo "Vous êtes un homme et vous êtes majeur";
      }
      elseif ($age < 18 && $genre == "homme")
      {
          echo "Vous êtes un homme et vous êtes mineur";
      }
      elseif ($age >= 18 && $genre == "femme")
      {
          echo "Vous êtes une femme et vous êtes majeur";
      }
      elseif ($age < 18 && $genre == "femme")
      {
          echo "Vous êtes une femme et vous êtes mineur";
      }
         ?>
        </p>
    </body>
</html>