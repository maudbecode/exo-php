
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Titre de ma page</title>
    </head>
    <body>
    <p>
    <?php 
$number = cal_days_in_month(CAL_GREGORIAN, 2, 2017); // 31
echo "There were {$number} days in February 2017";
    ?>
    </p>
    </body>
</html>