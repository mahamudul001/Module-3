<?php
$studentGrades = array(
  array(90, 80, 40),
  array(93, 87, 90),
  array(87, 89, 67),
);

function calculateAverageGrades($studentGrades){
  foreach ($studentGrades as $studentIndex => $grades) {
    $totalGrades = array_sum($grades);
    $averageGrade = $totalGrades / count($grades);

    echo "Student " . ($studentIndex + 1) . " average grade: " . $averageGrade . "\n";
  }
}

calculateAverageGrades($studentGrades);