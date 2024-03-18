<?php
function factorial($n) {
    if ($n === 0 || $n === 1) {
        return 1;
    } else {
        $result = 1;
        for ($i = 2; $i <= $n; $i++) {
            $result *= $i;
        }
        return $result;
    }
}

// Используем функцию для вычисления факториала числа 10
$result = factorial(10);
echo "Факториал числа 10: $result";
?>