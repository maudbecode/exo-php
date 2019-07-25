<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Titre de ma page</title>
    </head>
    <body>
    <?php
    //create a tab in html with php
    echo "<table border =\"1\" style='border-collapse: collapse'>";
	for ($row=1; $row <= 5; $row++) { 
		echo "<tr> \n";
		for ($col=1; $col <= 7; $col++) { 
            $p = $col * $row;
		   echo "<td>$p</td> \n";
		   	}
	  	    echo "</tr>";
		}
        echo "</table>";
        
    //show number of days in cells


        // Calculate number of days in each month for a given year.
        echo cal_days_in_month(CAL_GREGORIAN, 8, 2009);
        for($i = 2000; $i < 2009; $i++) {
            echo "$i: ", cal_days_in_month(CAL_GREGORIAN, 2, $i), "\n";
        }
    ?>
    </body>
</html>