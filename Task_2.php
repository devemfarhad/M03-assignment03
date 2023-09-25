<?php
function removeEvenNumbers($numbers) {
    $result = array();

    foreach ($numbers as $number) {
        if ($number % 2 != 0) {

            $result[] = $number;
        }
    }

    return $result;
}

$numbers = range(1, 10);
$oddNumbers = removeEvenNumbers($numbers);

print_r($oddNumbers);