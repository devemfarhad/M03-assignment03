<?php

$studentGrades = [
    ['Math' => 85, 'English' => 92, 'Science' => 78],
    ['Math' => 78, 'English' => 88, 'Science' => 95],
    ['Math' => 90, 'English' => 85, 'Science' => 92]
];

function calculateAverageGrades($grades) {
    foreach ($grades as $index => $student) {
        $total = array_sum($student);
        $average = $total / count($student);

        echo "Student " . ($index + 1) . " - Average Grade: " . $average . "\n";
    }
}

calculateAverageGrades($studentGrades);