<?php

function loopFactorial (int $value): int
{
    $total = 1;

    for ($index = 1; $index <= $value; $index++){
        $total *= $index;
    }

    return $total;
}

echo  loopFactorial(5) . PHP_EOL;

function factorialRecursive (int $value) {
    if ($value == 1){
        return 1;
    }
    return $value * factorialRecursive($value - 1);
}

var_dump(factorialRecursive(5));