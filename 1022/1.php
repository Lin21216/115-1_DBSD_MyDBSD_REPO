<?php
include "1.1.php";
echo "EX01<br/>";

include "1.inc";
require_once("2.inc");

$amount = 1000;
$rate = 28.1;

// 呼叫函數
$result = rateExchange($amount, $rate);
print "1000美金兌換新台幣=" . $result . "元<br/>";

require("1.inc");

$file = "1.inc";
require $file;
?>