<?php
// Определяем функцию, которая принимает массив чисел и анонимную функцию для нахождения суммы
function calculateSum(array $numbers, $callback) {
    return $callback($numbers);
}

// Вызываем функцию calculateSum с массивом чисел и анонимной функцией для нахождения суммы
$result = calculateSum([1, 2, 3, 4, 5], function($numbers) {
    return array_sum($numbers);
});

echo $result; // Выведет 15 (сумма всех чисел в массиве)
?>