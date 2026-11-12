<html>
<head>
    <title>商品目錄</title>
</head>

<body bgcolor="#FFCC77" text="blue">

<form action="catalog.php" method="post">
    選擇商品:

    <select name="Item">
        <option value="S001">10吋平板電腦 - $12000</option>
        <option value="S002">15.6吋筆記型電腦 - $27000</option>
        <option value="S003">iPhone智慧型手機 - $21000</option>
    </select>

    <input type="text" size="5" name="Quantity" value="1"/>

    <input type="submit" value="送出"/>
</form>

<hr/>

| <a href="catalog.php">商品目錄</a>
| <a href="shoppingcart.php">檢視購物車</a> |

</body>
</html>
