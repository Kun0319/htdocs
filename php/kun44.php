<meta charset="utf-8">
<?php
// $_POST跟$_GET 只接收對應的傳遞方式訊息
// $_REQUEST 會接收全部訊息 包含get的訊息或post訊息
$account = $_REQUEST['account'];
$passwd = password_hash($_REQUEST['passwd'], PASSWORD_DEFAULT);
$realname = $_REQUEST['realname'];

$mysqli = new mysqli('localhost', 'root', 'root', 'iii', 3306);
$mysqli->set_charset('utf-8');

$sql = 'INSERT INTO member(account,passwd,realname)' .
    'VALUES(?,?,?)';

$stmt = $mysqli->prepare($sql);
$stmt->bind_param('sss', $account, $passwd, $realname);

if ($stmt->execute()) {
    echo "OK";
} else {
    echo "XX";
}

?>