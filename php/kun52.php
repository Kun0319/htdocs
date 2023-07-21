<?php
var_dump($_GET);
echo'<hr>';


// $account = $_GET['account'];
// $password = $_GET['passwd'];
// $gender = $_GET['gebder'];
// $habbit = $_GET['habbit'];

$habbit = $_GET['habbit'];
foreach ($habbit as $v) {
    echo "{$v}<br/>";
}


?>