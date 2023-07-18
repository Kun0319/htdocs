<?php
$i = 1;
for (printKun(); $i < 10; printLine()) {
    echo "{$i}<br/>";
    $i++;
}

printKun();
printLine();
function printKun()
{
    echo 'Kun<br/>';
}

function printLine()
{
    echo '<hr/>';
}



?>