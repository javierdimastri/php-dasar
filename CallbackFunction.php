<?php

function sayHello (string $name, callable $filter) {
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

function sayHelloMultiple (string $name, string $city, callable $filter) {
    $finalName = call_user_func_array($filter, [$name, $city]);
    echo "Hello $finalName" . PHP_EOL;
}

// AnonymousFunction
$convertToUpper = function (string $name) {
    return strtoupper($name);
};

$convertToUpperWithCity = function (string $name, string $city) {
    return strtoupper($name) . " " . strtoupper($city);
};

//Callback Function use
sayHello("bigName", $convertToUpper);
sayHelloMultiple("bigName", "jkt47", $convertToUpperWithCity);