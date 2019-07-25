<!DOCTYPE html>
<html>
    <head>
        <title>exo2</title>
        <meta charset="utf-8" />
    </head>
    <body>
       <p>
       <?php 
       $depart = array (
           01 => "Ain",
           03 => "Allier",
           07 => "Ardèche",
           15 => "Cantal",
           26 => "Drôme",
           38 => "Isère",
           42 => "Loire",
           43 => "Haute-Loire",
           63 => "Puy-de-Dôme",
           69 => "Rhône",
           73 => "Savoie",
           74 => "Haute-Savoie",
       );
       echo $depart['69'] . "<br>";
       array_push($depart[57] = "Metz");
       
       foreach ($depart as $index => $valeur) {
           echo  "Le département " . $valeur . " a le numéro " . $index . "<br>";
       }
         ?>
        </p>
    </body>
</html>