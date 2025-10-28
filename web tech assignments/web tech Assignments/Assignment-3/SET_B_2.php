<html>
    <body bgcolor="#67074e">
        <font size=4 color=white>

     <?php
    if (isset($_GET['s']) && isset($_GET['s1'])) {
        $str = $_GET['s'];
        $separator = $_GET['s1'];
        echo "<br> Given String: $str";

        $arr = explode($separator, $str);
        $words = implode(" ", $arr);

        echo "<br> String into words: $words";

        $str_rep = str_replace($separator, '#', $str);
        echo "<br> After replacement: $str_rep";

        $last_word = end($arr);
        echo "<br> Last word in given string: $last_word";
    } else {
        echo "<br><strong>Please enter a string and select a separator.</strong>";
    }
    ?>

    </body>
</html>