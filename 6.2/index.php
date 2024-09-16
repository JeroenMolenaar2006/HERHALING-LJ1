<?php

$prices = [100, 200, 300, 400, 500];
While ($prices > 500) {
    $prices[0] += 50;
    $prices[1] += 50;
    $prices[2] += 50;
    $prices[3] += 50;
    }

echo "oorspronkelijke prijs:" . $prices;
echo "nieuwe prijs:" . $newPrice;


?>

