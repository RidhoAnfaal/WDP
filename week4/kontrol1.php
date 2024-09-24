<?php
$grades = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

echo "Sorted grades: ";
sort($grades);
foreach ($grades as $nilai) {
    echo "$nilai, ";
}
echo "<br>";

$filter = array_slice($grades, 2, count($grades) - 4);
$total = array_sum($filter);
$avg = $total / count($filter);

echo "Removing 2 highest & 2 lowest : ";
foreach ($filter as $nilai) {
    echo "$nilai, ";
}
echo "<br>";

echo "Total grade (ignoring 2 highest and 2 lowest): $total<br>";
echo "Avarage grade: " . $avg . "<br>";
