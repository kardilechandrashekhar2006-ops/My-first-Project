<!DOCTYPE html>
<html>
<head>
    <title>Associative Array Operations</title>
</head>
<body>
    <form method="post">
        <h3>Select an operation:</h3>
        <select name="choice">
            <option value="1">a) Split array into chunks</option>
            <option value="2">b) Sort array by values (preserve keys)</option>
            <option value="3">c) Filter odd elements</option>
            <option value="4">d) Merge arrays</option>
            <option value="5">e) Intersection of arrays</option>
            <option value="6">f) Union of arrays</option>
            <option value="7">g) Set difference of arrays</option>
        </select>
        <br><br>
        <input type="submit" value="Perform Operation">
    </form>

<?php
$arr = array("sophia" => 31, "jacob" => 41, "william" => 39, "ramesh" => 40);
$arr2 = array("raj" => 51, "jacob" => 41, "william" => 39, "sham" => 80);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ch = $_POST["choice"];
    echo "<pre>Original Array:\n";
    print_r($arr);

    echo "\nSecond Array:\n";
    print_r($arr2);

    echo "\nResult:\n";

    switch ($ch) {
        case 1:
            $chunks = array_chunk($arr, 2, true); // preserve keys
            print_r($chunks);
            break;

        case 2:
            asort($arr); // sort by value, preserve keys
            print_r($arr);
            break;

        case 3:
            $filtered = array_filter($arr, function($v) {
                return $v % 2 != 0;
            });
            print_r($filtered);
            break;

        case 4:
            $merged = array_merge($arr, $arr2);
            print_r($merged);
            break;

        case 5:
            $intersect = array_intersect($arr, $arr2);
            print_r($intersect);
            break;

        case 6:
            $union = $arr + $arr2; // preserves keys from first array
            print_r($union);
            break;

        case 7:
            $diff = array_diff($arr, $arr2);
            print_r($diff);
            break;

        default:
            echo "Invalid choice.";
    }

    echo "</pre>";
}
?>
</body>
</html>