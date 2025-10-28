<font color=#174b34 size=5>
<?php
$ele=$_GET['t'];
$arr=array(1,2,3,4,5);
echo "Original Array is:";
foreach($arr as $key=>$value){
      echo "<br>";
      echo $key."=>".$value;
}
$search=array_search($ele,$arr);
if($search===0||$search!=NULL)
    echo "<br><br> $ele is found in Array...With index $search";
    else
    echo "<br><br> $ele is not found in Array...";

?>