<?php
// 設一個變數$poker為range(0~51)的陣列 不是rand!!!!!!
$poker = range(0, 51);
var_dump($poker);
// shuffle()為打亂數字的函式

shuffle($poker);

// 迴圈出$poker 並將值設為$card 由於亂數產生0~51
// 總共52次 且值已經被shuffle()打亂 所以印出來已經是打亂過的撲克牌
// foreach ($poker as $card) {
//     echo "{$card}<br/>";
// }
?>