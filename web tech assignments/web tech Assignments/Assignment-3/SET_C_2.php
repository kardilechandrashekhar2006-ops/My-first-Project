<?php
$big = $_POST["big"];
$small = $_POST["small"];
$pos = (int)$_POST["pos"];
$len = (int)$_POST["len"];

echo "<h3>Original Sentence:</h3> $big<br>";
echo "<h3>Word:</h3> $small<br><br>";

// a. Delete part from big string
$deleted = substr_replace($big, "", $pos, $len);

// b. Insert small string into big string at position (length = 0)
$inserted = substr_replace($big, $small, $pos, 0);

// c. Replace part of big string with small string
$replaced = substr_replace($big, $small, $pos, $len);

// d. Replace all characters after position with small string
$replace_after = substr_replace($big, $small, $pos);

echo "<b>a. After Deletion:</b> $deleted<br>";
echo "<b>b. After Insertion:</b> $inserted<br>";
echo "<b>c. After Replacement:</b> $replaced<br>";
echo "<b>d. Replace After Position:</b> $replace_after<br>";
?>