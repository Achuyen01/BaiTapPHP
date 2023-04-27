<?php
function giaiPTBac2($a, $b, $c)
{
    $delta = $b * $b - 4 * $a * $c;
    if ($delta < 0) {
        return "Phương trình vô nghiệm";
    }
    if ($delta == 0) {
        $x = (-$b / (2 * $a));
        return "Phương trình có nghiệm kép x1 = x2 = $x";
    }
    $x1 = (-$b + sqrt($delta)) / (2 * $a);
    $x2 = (-$b - sqrt($delta)) / (2 * $a);
    return "Phương trình có 2 nghiệm x1 = $x1 và x2 = $x2";
}
echo giaiPTBac2(1, -5, 6);
?>