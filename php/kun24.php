<?php
$rate = $_GET['rate']; // 50%

// 1.要有畫布
$img = imagecreate(400, 20);

// 2.作畫
$yellow = imagecolorallocate($img, 255, 255, 0);
$red = imagecolorallocate($img, 255, 0, 0);

imagefilledrectangle($img, 0, 0, 400, 20, $yellow);
imagefilledrectangle($img, 0, 0, 400 * $rate / 100, 20, $red);

// 3.輸出(瀏覽器Browser/檔案File)
header('content-type:image/jpeg');
imagejpeg($img);

// 4.清除記憶體
imagedestroy($img);

?>