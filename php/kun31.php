<?php
// 切出需要的特定資料 字串
$lines = file('dir1/covid19.csv');
foreach ($lines as $line) {
    $field = explode(',', $line);
    echo "{$field[3]}:{$field[5]}<br/>";
}
?>