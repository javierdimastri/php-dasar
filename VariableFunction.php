<?php


function sayHello(string $name, $filter): string{
    $finalName = $filter($name);
    return "Hello nama besar $finalName" . PHP_EOL;
}

function upString($name): string{
    return strtoupper($name);
}

echo sayHello("eko", "upString");

//ArrowFunction
$firstName = "tes";
$lastName = "lastname";

$arrowFunction = fn() =>  "Hello $firstName $lastName" . PHP_EOL;

echo $arrowFunction();