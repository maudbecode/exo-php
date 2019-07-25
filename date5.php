
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Titre de ma page</title>
    </head>
    <body>
    <p>
    <?php 
$date1 = '23-07-2019';
$date2 = '16-05-2016';
$date3 = strtotime($date1);
$date4 = strtotime($date2);
$nbJoursTimestamp = $date3 - $date4;
$nbJours = $nbJoursTimestamp/86400;
echo $nbJours;
    ?>
    </p>
    </body>
</html>