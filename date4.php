
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Titre de ma page</title>
    </head>
    <body>
    <p>
    <?php 
$date = new DateTime();

$d = new DateTime('2016-08-02 15:00:00');
echo "for today " . $date->getTimestamp() . " and the other " . $d->getTimestamp();
    ?>
    </p>
    </body>
</html>