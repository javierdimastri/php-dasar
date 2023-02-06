<?php

$data = [ 1,2,3,4,5,6,7,8,9];

$timesTen = fn(int $value) => $value * 10;
$mappedArray = array_map($timesTen, $data);
var_dump($mappedArray);

var_dump(array_keys($data));