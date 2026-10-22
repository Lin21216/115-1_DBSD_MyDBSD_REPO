
<?php
$result = "";
$hours = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $hours = trim($_POST["hours"] ?? "");

    if ($hours === "") {
        $result = "請輸入靠泊時間";
    } elseif (!is_numeric($hours)) {
        $result = "請輸入有效的數字";
    } elseif ((float)$hours < 0) {
        $result = "請輸入大於或等於 0 的時間";
    } elseif ((float)$hours >= 20) {
        $result = "長時間靠泊";
    } else {
        $result = "一般靠泊";
    }
}
?>

<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>船舶靠泊時間判斷</title>
</head>
<body>
    <h2>船舶靠泊時間判斷</h2>

    <form method="post">
        <label for="hours">請輸入靠泊時間（小時）：</label>
        <input
            type="text"
            id="hours"
            name="hours"
            value="<?= htmlspecialchars($hours, ENT_QUOTES, 'UTF-8') ?>"
        >
        <button type="submit">送出</button>
    </form>

    <?php if ($result !== ""): ?>
        <p>判斷結果：<?= htmlspecialchars($result, ENT_QUOTES, 'UTF-8') ?></p>
    <?php endif; ?>
</body>
</html>
