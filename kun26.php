<?php
$img = imagecreatefromjpeg('imgs/test.jpg');

$black = imagecolorallocate($img, 0, 0, 0);
imagettftext($img, 36, 40, 100, 300, $black, 'fonts/mingliu.ttc', 'Hello,World');
// 3.輸出(瀏覽器Browser/檔案File)
header('content-type:image/jpeg');
imagejpeg($img);
imagejpeg($img, 'imgs/newtest.jpg');

// 4.清除記憶體
imagedestroy($img);

?>