
<?php
function printHeader()
{
    echo "<h3>SID: C113181115</h3>";
    echo "<h3>Name: 林千琪</h3>";
    echo "<h3>EX04</h3>";
    echo "<hr>";
}

printHeader();

$test = 15;

var_dump($test);

unset($test);

var_dump(isset($test));
?>