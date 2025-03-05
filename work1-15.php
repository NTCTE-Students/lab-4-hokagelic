<?php

//1
function findMax($array) {
    $max = $array[0]; 
    foreach ($array as $num) {
        if ($num > $max) {
            $max = $num; 
        }
    }
    return $max; 
}
//2
function isPalindrome($str) {
    $reversed = strrev($str); 
    return $str === $reversed; 
}
//3
function countWords($str) {
    $words = explode(" ", trim($str)); 
    return count($words); 
}
//4
function sortArray($array) {
    sort($array); 
    return $array; 
}
//5
function toUpperCase($str) {
    return strtoupper($str); 
}
//6
function sumOfDigits($number) {
    $sum = 0;
    while ($number > 0) {
        $digit = $number % 10; 
        $sum += $digit; 
        $number = intval($number / 10); 
    }
    return $sum; 
}
//7
function stringLength($str) {
    $length = 0;
    foreach (str_split($str) as $char) { 
        $length++; 
    }
    return $length; 
}
//8
function generateRandomPassword($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, strlen($characters) - 1)]; 
    }
    return $password; 
}
//9
function celsiusToFahrenheit($celsius) {
    return $celsius * (9 / 5) + 32; 
}
//10
function removeDuplicates($array) {
    $uniqueArray = array_unique($array);
    return "Массив без дубликатов: " . implode(", ", $uniqueArray);
}
//11
function factorial($number) {
    if ($number < 0) {
        return "Факториал отрицательных чисел не определен.";
    }
    $result = 1;
    for ($i = 1; $i <= $number; $i++) {
        $result *= $i;
    }
    return "Факториал {$number} равен {$result}.";
}
//12
function isPrime($number) {
    if ($number <= 1) {
        return "{$number} - не простое число.";
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return "{$number} - не простое число.";
        }
    }
    return "{$number} - простое число.";
}
//13
function average($array) {
    if (empty($array)) {
        return "Массив пуст.";
    }
    $avg = array_sum($array) / count($array);
    return "Среднее арифметическое равно {$avg}.";
}
//14
function formatDate($date) {
    $dateTime = DateTime::createFromFormat('Y-m-d', $date);
    if (!$dateTime) {
        return "Неверный формат даты.";
    }
    return "Отформатированная дата: " . $dateTime->format('d/m/Y');
}
//15
function secondLargest($array) {
    if (count($array) < 2) {
        return null; 
    }
    
    $max = $second = PHP_INT_MIN; 

    foreach ($array as $num) {
        if ($num > $max) {
            $second = $max; 
            $max = $num; 
        } elseif ($num > $second && $num < $max) {
            $second = $num; 
        }
    }

    return $second === PHP_INT_MIN ? null : $second; 
}
