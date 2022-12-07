<?php
$a = $_REQUEST['a'];
$b = $_REQUEST['b'];
echo "a =" . $a;
echo "<br />";
echo "b =" . $b;
echo "<br />";
echo "tong cua a va b la" . ($a + $b);
if ($a > $b) {
    echo "a > b";
} else {
    echo "a <= b";
}

echo "tong tu 0 toi 10 la:".tinhTong(10);

function tinhTong($max){
    $sum = 0;
    for ($i = 0; $i <= $max; $i++) {
        $sum = $sum + $i;
    }
    return $sum;
}

//GIai phuong trinh bac 2
$a = 1;
$b = 3;
$c = -1111;