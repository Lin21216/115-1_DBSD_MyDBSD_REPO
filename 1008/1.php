<?php
echo "# SID: C113181115<br>";
echo "# Name: 林千琪<br>";
echo "EX01<br>";
?>
<hr>
<?php

$grade = 85;

if ($grade >= 80) {
    print "甲等!<br/>";
}
elseif ($grade >= 70) {
    print "乙等!<br/>";
}
elseif ($grade >= 60) {
    print "丙等!<br/>";
}
else {
    print "丁等!<br/>";
}

?>