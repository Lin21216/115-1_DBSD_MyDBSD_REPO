# Name: 林千琪 <BR>
# SID: C113181115 <BR>
# EX02

<HR>

<?php

$total = 0;

for ($i = 1; $i <= 10; $i++) {
    echo " | " . $i;
    $total += $i;
}

echo "<HR>";
echo "總和：" . $total;

?>