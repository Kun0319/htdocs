<?php
$mysqli = new mysqli('localhost', 'root', 'root', 'iii', 3306);
$mysqli->set_charset('utf-8');
$sql = 'SELECT * FROM  food';


// 查詢特定行
$result = $mysqli->query($sql);
while ($row = $result->fetch_object()) {
    echo "{$row->ID} : {$row->Name} : {$row->Tel}<br/>";
}

?>