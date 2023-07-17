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




define('LETTERS', 'ABCDEFGHIJKLMNOPQRSTUVXWZIO');
function checkTWID($id)
{
    $ret = false;
    if (preg_match('/^[A-Z][12][0-9]{8}$/', $id)) {
        $ret = true;
        $c1 = substr($id, 0, 1);
        $a12 = strpos(LETTERS, $c1) + 10;
        $a1 = (int) ($a12 / 10);
        $a2 = $a12 % 10;

        $n1 = substr($id, 1, 1);
        $n2 = substr($id, 2, 1);
        $n3 = substr($id, 3, 1);
        $n4 = substr($id, 4, 1);
        $n5 = substr($id, 5, 1);
        $n6 = substr($id, 6, 1);
        $n7 = substr($id, 7, 1);
        $n8 = substr($id, 8, 1);
        $n9 = substr($id, 9, 1);


    }
    return $ret;
}




if (checkTWID('D123456789')) {
    echo "OK";
} else {
    echo 'XX';
}
$sum = $a1 * 1 + $a2 * 9 + $n1 * 8 + $n2 * 7 + $n3 * 6 + $n4 * 5 +
    $n5 * 4 + $n6 * 3 + $n7 * 2 + $n8 * 1 + $n9 * 1;
$ret = $sum % 10 == 0;

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

}
?>