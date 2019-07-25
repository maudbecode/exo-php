
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Titre de ma page</title>
    </head>
    <body>
    <p>
    <?php 
    $twentyDays = date ("Y-m-d", strtotime ("-22 days"));
    echo $twentyDays;
    ?>
    </p>
    </body>
</html>