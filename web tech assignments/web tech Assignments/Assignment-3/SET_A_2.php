
<?php

include 'function.php';
$str=$_POST['t'];
$ch=$_POST['r'];
switch($ch)
{
case 1:
    findlength($str);
    break;
case 2:
    countVowels($str);
    break;
case 3:
    echo "\t$str in title case:".ucwords($str);
    echo "<br>  \t $str in lower case:".strtolower($str);
    break;
case 4:
    echo "\t After padding:".str_pad($str,25,"*",STR_PAD_BOTH);
    break;
case 5:
    echo "\t After removing leading white space:".trim($str);
    break;
case 6:
    echo "\t reverse of $str is :".strrev($str);
    break;
default:
echo "\n \t \t please select correct input...";

}
?>
