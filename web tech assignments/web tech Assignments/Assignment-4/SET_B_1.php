<font color="#ddbc63" size=5>
<?php
$ele=$_POST['t1'];
$pos=$_POST['t2'];
$arr=array(201,206,212,218,224,230);
echo "Original Array is:<br><br>";
foreach($arr as $key=>$value){
      echo "<br>";
      echo $key."=>".$value;
}
array_splice($arr,$pos,0,$ele);
echo "<br><br>After Inserting $ele At Position $pos,New Array is:<br><br>";
foreach($arr as $key=>$value){
    echo "<br>";
    echo $key."=>".$value;
}
?>