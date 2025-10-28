<html>
    <body>
        <font size=4 color=#991111>
            <?php
              $name=$_GET['t1'];
              $college=$_GET['t2'];
              $msg=$_GET['t3'];
              echo "<br>****____with all parameters____****<br><br>";
                greet($name,$college,$msg);
                echo "<br> <br> ****____missing parameters____****<br><br>";
                greet($name,$college,$msg);
                function greet($name,$college,$msg){
                    if(isset($name))
                        echo "<br> Hello $name";
                    else{
                        echo "please enter your name...!!";
                        return;
                    }
                    if(isset($college))
                        echo "<br> Welcome to $college";
                    else{
                        echo "please enter your college name...!!";
                        return;
                    }
                    if(isset($msg))
                        echo "<br> wish you a  $msg";
                    else{
                        echo "please give some message ...!!";
                        return;
                    }
                    }
              ?>
    </body>
</html>