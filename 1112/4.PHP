<?php
session_start(); // 啟用交談期

require("1.1.php");

echo "W10-EX04<br/>";

if (isset($_POST["Item"])) {
    $item = $_POST["Item"];
    $quantity = $_POST["Quantity"];

    $_SESSION["Item"] = $item;
    $_SESSION["Quantity"] = $quantity;
}
?>

<html>
<head>
    <title>商品目錄</title>
</head>

<body bgcolor="#FFCC77" text="blue">

<form action="catalog.php" method="post">

    選擇商品：

    <select name="Item">
        <option value="S001">10吋平板電腦 - $12000</option>
        <option value="S002">15.6吋筆記型電腦 - $27000</option>
        <option value="S003">iPhone智慧型手機 - $21000</option>
    </select>

    <input type="text" name="Quantity" value="1" size="5" />

    <input type="submit" value="送出" />

</form>

<hr/>

| <a href="catalog.php">Catalog</a> |
<a href="shoppingcart.php">Mini Cart</a> |

</body>
</html>