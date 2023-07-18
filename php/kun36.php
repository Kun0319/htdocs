<!-- 連資料庫 -->
<?php
$mysqli = new mysqli('localhost', 'root', 'root', 'iii', 3306);

$sql = 'INSERT INTO cust(cname ,tel,birthday) VALUES' .
    '("Kun","123","2000-03-19")';

$mysqli->query($sql);


?>