<?php
$totalSeats = 45;
$occupiedSeats = 28;
$emptySeats = $totalSeats - $occupiedSeats;
echo "Total seats = $totalSeats <br>";
echo "Occupied seats = $occupiedSeats <br>";
echo "Empty seats = total seats - occupied seats = $emptySeats <br>";

$percentageOfEmptySeats = ($emptySeats / $totalSeats) * 100;
echo "Percentage of empty seats = (empty seats / total seats) * 100 = " . number_format($percentageOfEmptySeats, 2) . "%";
