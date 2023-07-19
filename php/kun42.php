<?php
$passwd = '123456';
// 下面password_hash用來打亂密碼 變成雜亂碼
$newpassword = password_hash($passwd, PASSWORD_DEFAULT);
echo "$newpassword<br/>";
// 下面if用來驗證密碼
if (password_verify('123456', $newpassword)) {
    echo "OK";
} else {
    echo "XX";
}


?>