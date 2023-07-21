<?php

// if (!isset($_POST['page']))
//     return;
// 下面那行預設單獨打開時會在page 1 
$page = isset($_POST['page']) ? $_POST['page'] : 1;
// $rpp為設定每次取得的資料元素數量
$rpp = 10;
// $page = $_GET['page'];
// 設定變數
$start = ($page - 1) * $rpp;
// 連接到MySQL資料庫 
$mysqli = new mysqli('localhost', 'root', 'root', 'iii', '3306');
// 讓編碼形式為utf8
$mysqli->set_charset('utf8');


$sql = 'SELECT * FROM food ORDER BY id LIMIT ?, ?';
$stmt = $mysqli->prepare($sql);
$stmt->bind_param('ii', $start, $rpp);
$stmt->execute();
$result = $stmt->get_result();

$root = [];

while ($row = $result->fetch_object()) {
    // echo "{$row->ID}:{$row->Name}<br/>";
    $root[] = $row;
}


$json = json_encode($root);

echo $json;




?>