<font color=orange size=4>
<?php
$ele = isset($_POST['t']) ? $_POST['t'] : "";
$ch = isset($_POST['ch']) ? $_POST['ch'] : "";
$arr=array(1,2,3,4,5);
echo "original array is:";
foreach($arr as $key=>$value){
echo "<br>";
$nbsp="&nbsp;";
echo "$nbsp $nbsp $nbsp $nbsp $nbsp $nbsp $nbsp $nbsp [key]=>$value"; 
}
switch($ch){

     case 1:
        array_push($arr,$ele);
        echo "<br><br>after inserting $ele,stack is:";
        foreach($arr as $key=>$value){
            echo "<br>";
            echo "$nbsp $nbsp $nbsp $nbsp $nbsp $nbsp $nbsp $nbsp [key]=>$value"; 
        }
            break;

    case 2:
       array_pop($arr);
        echo "<br><br>after deleting $ele,stack is:"; 
        foreach($arr as $key=>$value){ 
        echo "<br>";
        echo "$nbsp $nbsp $nbsp $nbsp $nbsp $nbsp $nbsp $nbsp [key]=>$value";
     } 
            break;
    case 3:
        echo "<br><br> content of stack is:<br>";
        foreach($arr as $key=>$value){
            echo "<br>";
            echo "$nbsp $nbsp $nbsp $nbsp $nbsp $nbsp $nbsp $nbsp [key]=>$value"; 
        }
            break;
    case 4:
        array_unshift($arr,$ele);
        echo "<br><br>after inserting $ele,queue is:";
        foreach($arr as $key=>$value){
            echo "<br>";
            echo "$nbsp $nbsp $nbsp $nbsp $nbsp $nbsp $nbsp $nbsp [key]=>$value"; 
        }
            break;
    case 5:
        array_shift($arr);
        echo "<br><br>after deleting $ele,queue is:";
        foreach($arr as $key=>$value){
            echo "<br>";
            echo "$nbsp $nbsp $nbsp $nbsp $nbsp $nbsp $nbsp $nbsp [key]=>$value"; 
        }
            break;
    case 6:
        echo "<br><br> content of queue is:<br>";
        foreach($arr as $key=>$value){
            echo "<br>";
            echo "$nbsp $nbsp $nbsp $nbsp $nbsp $nbsp $nbsp $nbsp [key]=>$value"; 
        }
            break;
    default:
        echo "please enter valid choice...";
        break;
    }



?>