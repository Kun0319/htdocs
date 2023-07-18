<?php
$ary = array(1, 2, 3, 4, 5, 6, 7);
var_dump($ary);
echo '<hr/>';
for ($i = 0; $i < count($ary); $i++) {
    echo "$i<br>";
}




echo $ary[3];
echo '<hr/>';
for ($i = 0; $i < count($ary); $i++) {
    echo "$i<br>";
}
$ary[2] = 'iii';

echo '<hr/>';
var_dump($ary);
echo '<hr/>';
$ary[137] = 'OK';
var_dump($ary);
echo '<hr/>';


foreach ($ary as $value) {
    echo "{$value}<br/>";
}
echo '<hr/>';
$r = rand(1, 6);


for ($x = 1; $x <= 100; $x++) {
    echo $r;
    echo "<br/>";
}




?>