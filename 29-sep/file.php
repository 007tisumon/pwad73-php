<?php

$data = file("file.txt");


foreach ($data as $key => $value) {
    echo $value . "<br>";
}
;