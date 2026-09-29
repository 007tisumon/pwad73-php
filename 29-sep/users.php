<?php

$users = file("user.txt");

foreach ($users as $user) {
    list($name, $email) = explode(" ", $user);
    echo "<a href=\"mailto:$email\">$name</a> | ";
}