<?php
$price = 120000;
$discount = 0.2;

if ($price > 100000) {
    $totalDiscount = $discount * $price;
    $totalPrice = $price - $totalDiscount;

    echo "Original price = Rp." . $price . "<br>";
    echo "Discount 20% = Rp." . $totalDiscount . "<br>";
    echo "Price after discount = Rp." . $totalPrice . "<br>";
} else {
    echo "Price to be paid = Rp." . $price . "<br>";
}
