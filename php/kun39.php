<?php
// https://data.coa.gov.tw/Service/OpenData/ODwsv/ODwsvTravelFood.aspx
$json = file_get_contents('https://data.coa.gov.tw/Service/OpenData/ODwsv/ODwsvTravelFood.aspx');
// echo $json;
// 解析Json格式的資料 true是陣列 false則是物件的形式
$data = json_decode($json, false);
// var_dump($data);
$mysqli = new mysqli('localhost', 'root', 'root', 'iii', 3306);
$mysqli->set_charset('utf-8');
// 下面兩條指令是 在資料庫亂掉 或排序亂時
// 第一條清除資料庫 第二條讓資料庫自動填入
// $mysqli->query('DELETE from food');
// $mysqil->('ALTER TABLE food AUTO_INCREMENT=1');

$sql = 'INSERT INTO food(Name,Tel,	Address,HostWords,City,Town,Pic,Lat,Lng)' .
    'VALUES(?,?,?,?,?,?,?,?,?)';
$stmt = $mysqli->prepare($sql);

foreach ($data as $k => $row) {
    echo "{$k}:{$row->ID}:{$row->Name}<br/>";
    $stmt->bind_param('sssssssdd', $row->Name, $row->Tel, $row->Address, $row->HostWords, $row->City, $row->Town, $row->PicURL, $row->Latitude, $row->Longitude);
    $stmt->execute();
}
?>