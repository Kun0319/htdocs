<?php
// 先設一個變數為一個空陣列
$poker = array();
// 使用for循環 產生一個亂數 撲克牌有52張 所以需要循環52次 52個亂數
for ($i = 0; $i < 52; $i++) {
    $temp = rand(0, 51);


    $isRepeat = false;
    // 下面先寫的
    // 建立一個for循環 設$j為0 並隨著$i大小為了檢查前面迴圈執行了 $i次 
    // 再設一個if條件式  條件是 前面rand出來的亂數如果等於變數$poker[$j]中的值則設變數$isRepeat= true;
    // 並跳出迴圈
    for ($j = 0; $j < $i; $j++) {
        if ($temp == $poker[$j]) {
            //重複的
            $isRepeat = true;
            break;
        }
    }
    //檢查機制
// 設一個條件式檢查變數$isRepeat是不是false 
// 如果是false則通過!$isRepeat 並設變數$poker[$i] 變數中的第$i次值為亂數$temp
// 如果$isRepeat為true則不通過 執行$i -1 減少一次 讓迴圈減少一次 直到滿足條件並到52次
    if (!$isRepeat) {
        $poker[$i] = $temp;
    } else {
        $i--;
    }

}
// 迴圈 迭代出poker
// 設$card為值 並印出來
foreach ($poker as $card) {
    echo "{$card}<br/>";
}
?>