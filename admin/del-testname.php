<?php
$sum = 0;
$str = '';
for($i = 1; $i<=10; $i++) {
    $sum = $sum + $i;
    $str .= $i == 10 ? $i." = " : $i." + ";
}
echo $str.$sum;
?>
