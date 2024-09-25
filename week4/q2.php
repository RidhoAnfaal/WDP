<?php
$students = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90]
];

$totalGrades = 0;
$numberOfStudents = count($students);

foreach ($students as $student) {
    $totalGrades += $student[1];
}

$averageGrade = $totalGrades / $numberOfStudents;

echo "Class Average Grade: $averageGrade <br>";
echo "Students who scored above the class average:<br>";

foreach ($students as $student) {
    if ($student[1] > $averageGrade) {
        echo "Name: {$student[0]}, Grade: {$student[1]}<br>";
    }
}
