<?php

function getValue () {
    return 100;
}

$value = getValue();

echo getValue() . PHP_EOL;

$date = new DateTime();

var_dump($date);

$result=  $date -> format('Y-m-d H:i:s');
echo $result . PHP_EOL;
echo date_format($date,"Y/m/d H:i:s") . PHP_EOL;