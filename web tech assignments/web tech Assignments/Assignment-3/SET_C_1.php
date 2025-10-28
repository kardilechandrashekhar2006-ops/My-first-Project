<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $subjects = explode(",", $_POST["subjects"][0]);
    $serials = explode(",", $_POST["serials"][0]);
    $marks = explode(",", $_POST["marks"][0]);

    $total = array_sum($marks);
    $percentage = $total / count($marks);
    $grade = ($percentage >= 75) ? "Distinction" :
             (($percentage >= 60) ? "First Class" :
             (($percentage >= 50) ? "Second Class" :
             (($percentage >= 35) ? "Pass" : "Fail")));

    echo "<h3>Result:</h3>";
    echo "<table border='1' cellpadding='5'>";
    echo "<tr><th>Serial No</th><th>Subject</th><th>Marks</th></tr>";

    for ($i = 0; $i < count($marks); $i++) {
        echo "<tr><td>{$serials[$i]}</td><td>{$subjects[$i]}</td><td>{$marks[$i]}</td></tr>";
    }

    echo "<tr><td colspan='2'><strong>Total</strong></td><td><strong>$total</strong></td></tr>";
    echo "<tr><td colspan='2'><strong>Percentage</strong></td><td><strong>$percentage%</strong></td></tr>";
    echo "<tr><td colspan='2'><strong>Grade</strong></td><td><strong>$grade</strong></td></tr>";
    echo "</table>";
}
?>