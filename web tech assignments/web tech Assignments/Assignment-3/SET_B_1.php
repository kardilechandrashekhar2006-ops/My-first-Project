<html>
    <body bgcolor="white">
        <font size=4 color=#4c5b4b>
            <?php
                $small=$_GET['s1'];
                $large=$_GET['s2'];
                $n=$_GET['n'];
                $pos=strpos($large,$small);
                if(strpos($large,$small)===0)
                    echo "$small Appears at the start of $large.";
                else
                    echo "$small does not appear at the start of $large";
                
                echo "<br> position of '$small' in $large is:".$pos;
                $cmp=strncasecmp($small,$large,$n);
                if($cmp==0)
                    echo "<br> first $n characters both string are equal.";
                else
                    echo "<br> first $n characters both string are not equal";

            ?>
        </font>
    </body>
 </html>