<?php

function sum($a):int
{
    $sum=0;
    for($i=1;$i<=$a;$i++)
    {
    $sum +=$i;
    }
    return $sum;
}

function fact($x):int
{
    $factorial=1;
    for($i=1;$i<=$x;$i++)
    {
        $factorial*=$i;
    }
    return $factorial;
}
    $a= $_POST["first"];
    $b= $_POST["second"];
    $mod=$a % $b;
    $power=pow($a,$b);
    echo "mod is:",$mod,"<br>";
    echo "power is:",$power,"<br>";
    echo "sum is:",sum( $a),"<br>";
    echo "factorial is:",fact($b),"<br>"

?>