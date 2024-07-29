<?php

class Solution{
function minFallingPathSum($matrix) {
    $n = count($matrix);

    // Копіюємо перший рядок
    $dp = $matrix[0];

    for ($row = 1; $row < $n; $row++) {
        $new_dp = array_fill(0, $n, 0);
        for ($col = 0; $col < $n; $col++) {
            $left = ($col > 0) ? $dp[$col - 1] : PHP_INT_MAX;
            $middle = $dp[$col];
            $right = ($col < $n - 1) ? $dp[$col + 1] : PHP_INT_MAX;
            $new_dp[$col] = $matrix[$row][$col] + min($left, $middle, $right);
        }
        $dp = $new_dp;
    }

    return min($dp);
}
}
// Приклад використання
$matrix = [
    [2, 9, 3, 4, 1],
    [5, 6, 1, 8, 3],
    [7, 2, 9, 4, 1],
    [6, 5, 4, 3, 2],
    [1, 2, 3, 4, 5]
];
$obj = new Solution();
echo $obj->minFallingPathSum($matrix); // Виведе мінімальну суму падучого шляху

?>

