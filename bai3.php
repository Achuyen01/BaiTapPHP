<?php
$sum = 0;
$count = 0;
for ($i = 1; $count < 100; $i++) {
    if ($i % 3 == 0) {
        $sum += $i;
        $count++;
    }
}
echo "Tổng của 100 số đầu tiên chia hết cho 3 là: " . $sum;
?>