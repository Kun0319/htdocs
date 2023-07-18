<?php
$fp = fopen('dir1/kun01.txt', 'a');
fwrite($fp, "\nabcdefg");
fflush($fp);
fclose($fp);

?>