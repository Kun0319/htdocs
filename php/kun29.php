<?php
    $fp = fopen('dir1/kunnn.txt','r');

    while ($c = fgetc($fp)){
        echo "{$c}";
    }

    fclose($fp);
?>