<?php
function calculateCircleArea($radius) {
    if ($radius <= 0) {
        return "Invalid radius. Please enter a positive number.";
    }
    $area = pi() * pow($radius, 2);
    return $area;
}
$testRadii = [3, 5.5, 0, -4];

foreach ($testRadii as $radius) {
    echo "Radius: $radius | Area: " . calculateCircleArea($radius) . "\n";
}
?>
