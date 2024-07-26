<?php

class Solution {
    function palindrome($row) {
        $length = strlen($row);

        // Стек для перевірки паліндрома
        $stack = [];
        $mid = floor($length / 2);

        // Пройти по всій частині до середини
        for ($i = 0; $i < $mid; $i++) {
            array_push($stack, $row[$i]);
        }

        // Якщо довжина непарна, пропускаємо середній елемент
        if ($length % 2 != 0) {
            $mid++;
        }

        // Пройти по решті частини рядка, починаючи з середини + 1
        for ($i = $mid; $i < $length; $i++) {
            if (empty($stack)) {
                return false; // Якщо стек порожній до завершення перевірки
            }
            $lastelement = array_pop($stack);
            if ($lastelement !== $row[$i]) {
                return false; // Якщо символи не співпадають
            }
        }

        // Якщо стек порожній в кінці, це паліндром
        return empty($stack);
    }
}

// Приклад використання:
$obj = new Solution();
$row = "maam";
echo json_encode($obj->palindrome($row)); // Виведе true

?>
