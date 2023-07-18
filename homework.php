<?php
// function checkTWID($id)
// {
//     $ret = false;

//     if (strlen($id) == 10){
//         $c1 = substr($id, 0, 1);
//         $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
//         if (strpos($letters, $c1) !== false) {
//             $ret = true;
//         }
//     }
//     return $ret;
// }



if (checkTWID('D123456789')) {
    echo "OK";
} else {
    echo 'XX';
}


// 7/17問題 回家作業
// 隨機產生身分證字號
function createTWIdByRandom()
{
    return createTWIdByGender(rand(0, 1) == 1);
}
// 指定性別
function createTWIDByGender($gender = false)
{
    return createTWIdByBoth($gender, substr(LETTERS, rand(0, 25), 1));
}
// 指定地址
function createTWIDByArea($c = 'A')
{
    return createTWIDByBoth(rand(0, 1) == 1, $c);
}
// 指定位置 性別
function createTWIDByBoth($gender, $c)
{
// 前兩碼固定 後面八碼 其中7碼改亂數產生 最後一碼用迴圈
// 讓全部加起來整除於10 等於0
}
?>