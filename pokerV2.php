<?php
// 設一個變數$poker為range(0~51)的陣列 不是rand!!!!!!
$poker = range(0, 51);
// var_dump($poker);
// shuffle()為打亂數字的函式

shuffle($poker);

// 迴圈出$poker 並將值設為$card 由於亂數產生0~51
// 總共52次 且值已經被shuffle()打亂 所以印出來已經是打亂過的撲克牌
foreach ($poker as $card) {
    // echo "{$card}<br/>";
}
// 發牌給4位玩家 設定一個陣列 有四個子陣列
$players = [[], [], [], []];
// 
foreach ($poker as $i => $card) {
    $players[$i % 4][(int) ($i / 4)] = $card;
}

echo '<hr>';
foreach ($players[0] as $card) {
    // echo "{$card}<br/>";
}

?>
&spades;&hearts;&diams;&clubs;
<hr />
<table border="1" width="100%">

    <?php
    $shapes = ['&spades;', '&clubs;', '<font color=red>&hearts; ', '<font color=red>&diams;'];
    $values = ['A', 2, 3, 4, 5, 6, 7, 8, 9, 10, 'J', 'Q', 'K'];

    foreach ($players as $player) {
        sort($player);
        echo "<tr>";
        foreach ($player as $card) {
            $s = $shapes[(int) $card / 13];
            $v = $values[$card % 13];
            echo "<td>{$s}{$v}</td>";
        }
        echo "</tr>";
    }


    ?>

</table>