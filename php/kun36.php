<!-- 連資料庫 -->
<?php
$mysqli = new mysqli('localhost', 'root', 'root', 'iii', 3306);

// $sql = 'INSERT INTO cust(cname ,tel,birthday) VALUES' .
//     '("Kun","123","2000-03-19")';

// if ($mysqli->query($sql)) {
//     // success
// } else {
//     // failure
// }

$cname = 'Kun';
$tel = '123';
$birthday = '2000-03-19';
$sql = 'INSERT INTO cust(cname ,tel,birthday) VALUES' .
    '(?,?,?)';
$stmt = $mysqli->prepare($sql);
$stmt->bind_param('sss', $cname, $tel, $birthday);
if ($stmt->execute()) {
    echo 'success';
} else {
    echo 'failure';
}


?>