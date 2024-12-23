<?php 
$students = [
    "Mohit" => 85,
    "Messi" => 78,
    "umesh"=>34
];

$totalgrades= 0;
$count= 0;

$totalGrades = 0;
$count = 0;

foreach ($students as $name => $grade) {
    echo "Student: $name, Grade: $grade<br>";
    $totalGrades += $grade; 
    $count++;               
}

$average = $totalGrades / $count;

echo "<br>Average Grade: $average";
?>
