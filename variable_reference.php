<?php

// & this sign make previous value change

$value1 = "Hello";
$value2 = & $value1;

$value2 = "Joy Bangla";

echo $value1;