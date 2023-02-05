<?php

// without foreach
$names = ["name 1", "name 2", "name 3"];

for ($index = 0; $index < count($names); $index++){
    echo "Hello loop $names[$index]" . PHP_EOL;
}

//foreach

foreach ($names as $index => $name){
    echo "index $index $name" .PHP_EOL;
}

$person = [
    "first_name" => "Eko",
    "middle_name" => "Kurniawan",
    "lasage" => 1
];

foreach ($person as $key => $value){
    var_dump($value);
    echo "$key: $value" . PHP_EOL;
}