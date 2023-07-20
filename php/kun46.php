<!-- 驗證帳號密碼 -->

<meta charset="utf-8">
<?php
if (isset($_POST['account']) && isset($_POST['passwd'])) {
    $account = $_POST['account'];
    $passwd = $_POST['passwd'];


    $mysqli = new mysqli('localhost', 'root', 'root', 'iii', 3306);
    $mysqli->set_charset('utf-8');

    $sql = 'SELECT id,account,passwd,realname FROM member WHERE account = ?';
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('s', $account);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows() > 0) {
        $stmt->bind_result($id, $account, $hasppasswd, $realname);
        $stmt->fetch();
        if (password_verify($passwd, $hasppasswd)) {
            // OK
            // 帳號密碼跟資料庫中的相符則帶到47號檔案
            header('Location:kun47.html');
        } else {
            // passwd error
            header('Location:kun45.html');
        }
    } else {
        // account NOT exist
        header('Location:kun45.html');
    }
} else {
    header('Location:kun45.html');

}



?>