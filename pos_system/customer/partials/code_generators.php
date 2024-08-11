<?php

$length = 4;
$alpha = substr(str_shuffle("QWERTYUIOASDFGHJKLZXCVBNM"), 1, $length);
$beta = substr(str_shuffle("1234567890"), 1, $length);

$prod_id  = bin2hex(random_bytes('5'));
$cat_id  = bin2hex(random_bytes('5'));
$customer_id = bin2hex(random_bytes('6'));
?>