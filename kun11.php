<?php
$a = 10;
$b = 3;
if ($a++ > 10 & --$b < 3) {
    echo "OK:a={$a}; b = {$b}";
} else {
    echo "XX:a={$a}; b = {$b}";
}

echo '<hr>';

echo 2 ^ 3;
echo '<hr>';


$v ='';
if ($v) {
    echo "OK";
} else {
    echo "XX";
}
?>