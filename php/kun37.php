<meta charset='UTF-8' />
<?php
$mysqli = new mysqli('localhost', 'root', 'root', 'iii', 3306);
$mysqli->set_charset('utf-8');
$sql = 'UPDATE cust SET cname=?,tel=? where id=?';
$id = 1;
$cname = 'Amy';
$tel = '321';
$stmt = $mysqli->prepare($sql);
$stmt->bind_param('ssi', $cname, $tel, $id);
if ($stmt->execute()) {
    echo 'success';
} else {
    echo 'failure';
}


?>