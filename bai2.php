<?php
$sum = 0;

for ($i = 2; $i < 1000; $i++) {
    if ($i % 2 == 0) {
        $sum += $i;
    }
}

echo "Tổng các số chẵn nhỏ hơn 1000 là: " . $sum;
?>