<?php
// 相對於40號檔案的另外一個查詢方法
$mysqli = new mysqli('localhost', 'root', 'root', 'iii', 3306);
$mysqli->set_charset('utf-8');
// 加上WHERE 條件式 來限制查詢結果
$sql = 'SELECT ID,Name,Tel,City FROM  food WHERE city LIKE ?';


$key = "%臺中%";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param('s', $key);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id, $name, $tel, $city);


while ($stmt->fetch()) {
    echo "{$id}:{$name}:{$tel}:{$city}<br/>";
}
// 東西查完了 要解放
$stmt->free_result();






?>