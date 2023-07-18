<?php
$a = array(4);
$a[0] = 12;
$a[1] = array();
// 將變數a中的元素0為12 
// 1為一個空陣列
echo '<hr/>';
// 在變數a中的第二個元素中 $a[1]再加入三個元素 
// 分別是
// $a[1][0] = true; 變數$a的第二個元素中的子陣列第一個元素設為true;
// $a[1][1] = 34;  變數$a的第二個元素中的子陣列第二個元素設為34;
// $a[1][7] = 56;  變數$a的第二個元素中的子陣列第八個元素設為56;
$a[1][0] = true;
$a[1][1] = 34;
$a[1][7] = 56;
var_dump($a);
echo '<hr/>';

// 進行一個迴圈 迭代$a的每個元素
// 迭代是指重複 回饋 過程 輪流、更替的活動
// $k是指$a中的索引或鍵 $v則是值
foreach ($a as $k => $v) {
    echo "{$k} :";
    //$v=> normal /array
// 在此迴圈中$v只有可能是值或者另外一個新的子陣列
// 我們設定為如果值為陣列時 印出'[array]'這個字串

    if (gettype($v) == 'array') {
        echo '[array]<br />';
        // 裡面再迭代 $a的值中的子陣列 也就是迴圈到$a[1]時 前面將元素設為$v
// 設$kk為索引或鍵 $vv為值
// 印出 字串"{$kk索引或鍵} => {$vv值}"
        foreach ($v as $kk => $vv) {
            echo "{$kk} =>{$vv}<br/>";
        }
//前面如果判斷不是陣列時 則印出值 
    } else {
        echo "{$v}<br>";

    }
}
?>