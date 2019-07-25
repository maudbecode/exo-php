
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Titre de ma page</title>
    </head>
    <body>
    <p>
    <?php 
    setlocale (LC_TIME, 'fr_FR.utf8','fra');
    echo "english : " . $date = date("l d F Y") . "" . " french : " .  strftime("%A %d %B %G");;
    ?>
    </p>
    </body>
</html>