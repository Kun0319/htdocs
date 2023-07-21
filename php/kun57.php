<?php
// 若使用到session (讓變數可延續到其他檔案)
// 如果php.ini檔中可以設定auto start就可以不用寫session_start();
session_start();
$rand = rand(1, 49);
$rand = $_SESSION['rand'];
echo $rand;
?>
<hr />
<a href="kun58.php">Kun58</a>