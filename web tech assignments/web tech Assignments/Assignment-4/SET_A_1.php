<!DOCTYPE html>
<html lang="en">
<head>
   <title>Assignment 4th set A Q1</title>
</head>
<body bgcolor="#07474f">
    <font color=white size=5>
        <?php

        $temp=array(12,6,25,27,26,30,34,31,46,32,22,6,28,38,30,42,45);
        asort($temp);
        $avg=array_sum($temp)/sizeof($temp);
        echo "<br><br>Average of high temperature is:".round($avg)."&deg;";
        $warm = array_slice($temp, sizeof($temp) - 5);
        echo "<br><br> the 5 warmest high temperature is:";
        for($i=0;$i<sizeof($warm);$i++)
        {
            echo "<br>".$warm[$i] . "&deg; ";
           
        }
        $cool=array_slice($temp,0,5);
        echo "<br><br> the 5 coolest high temperature is:";
        for($i=0;$i<sizeof($cool);$i++)
        {
            echo "<br>". $cool[$i]."&deg; ";
        }
        ?>
        </font>
</body>
</html>