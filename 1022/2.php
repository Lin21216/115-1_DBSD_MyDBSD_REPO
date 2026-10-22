<?php

function printHeader()
{
    echo "<h3>SID: C113181115</h3>";
    echo "<h3>Name: 林千琪</h3>";
    echo "<h3>EX02</h3>";
    echo "<hr>";
}

function rateExchange($amount, $rate)
{
    $result = $amount * $rate;
    return $result;
}

$rate = rateExchange(1000, 32.5);

printHeader();

echo "Money: " . $rate;
echo "<br/>";

$scores = array(22, 16, 30, 24);
$total = 0;

foreach ($scores as $element) {
    echo "element: $element <br/>";
    $total += $element;
}

echo "Total:" . $total;
echo "<br/>";

print_r($scores);

?>