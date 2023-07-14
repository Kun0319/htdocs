<?php

$poker = array();
for ($i = 0; $i < 52; $i++) {
    $temp = rand(0, 51);


    $isRepeat = false;
    // 下面先寫的
    for ($j = 0; $j < $i; $j++) {
        if ($temp == $poker[$j]) {
            //重複的
            $isRepeat = true;
            break;
        }
    }
    //檢查機制

    if (!$isRepeat) {
        $poker[$i] = $temp;
    } else {
        $i--;
    }

}
foreach ($poker as $card) {
    echo "{$card}<br/>";
}
?>