<?php

function findlength($str)
{
    $arr=str_split($str);
    echo "<br> Length of $str is:".sizeof($arr);
}
function countVowels($str)
{ 
    $arr=str_split($str);
    $vwl_cnt=0;
    for($i=0;$i<sizeof($arr);$i++)
    {
        if($arr[$i]=='a' || $arr[$i]=='e' || $arr[$i]=='i' || $arr[$i]=='o' || $arr[$i]=='u' || $arr[$i]=='A' || $arr[$i]=='E' || $arr[$i]=='I' || $arr[$i]=='O' || $arr[$i]=='U')

            $vwl_cnt++;
    }
    echo "total number of vowels in $str is: $vwl_cnt";
}

?>