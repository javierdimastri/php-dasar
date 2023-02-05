<?php
const AUTHOR = ["per1", "per2"];
const NOAUTH = ["per1no", "perno2"];

echo implode(", ", AUTHOR);
echo "\n";
echo  implode(" ", NOAUTH);
echo "\n";
echo json_encode(NOAUTH);


