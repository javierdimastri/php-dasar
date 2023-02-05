<?php

$firstArray = array(4,'2',34, 'ccc');
var_dump($firstArray);
echo "\n";

$mapArray = [
    "id" => 'newId',"name" => 123
];
var_dump($mapArray);
echo "\n";

echo implode(", ", $mapArray);

echo "\n";

$json = json_encode($mapArray);

echo($json);
echo "\n";
$a = ["name" => "some", "gen" => "one"];
$b = ["gen" => "one", "name" => "some"];
$c = ["class" => "xx1"];
if ($a == $b){
    echo "same key-value but not same index" . PHP_EOL;
}
if ($a !== $c){
    echo "not same" . PHP_EOL;
}
echo "\n";
var_dump($a == $b);
echo "\n";
var_dump($a !== $b);

$combine = $a + $b;
var_dump($combine);