<?php
include "1.1.php";

echo "EX03 <br/>";

$arr = array(
    "Color" => "Black",
    "name" => "Chen-Hui-An",
    "Shape" => "Triangle"
);

foreach ($arr as $key => $value) {
    echo "$key=>$value ";
    echo "<br/>";
}

print_r($arr);
echo "<br/>";

$arr["type"] = "PHP";
unset($arr["type"]);
?>