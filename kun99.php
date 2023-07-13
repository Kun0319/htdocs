<table width="100%" border="1">

    <?php
    // 常數命名
    define('ROWS', 2);
    define('COL', 6);
    define('START', 1);


    for ($k = 0; $k < ROWS; $k++) {
        echo '<tr>';
        for ($j = START; $j <= (START + COL - 1); $j++) {
            $newj = $j + $k * COL;
            echo '<td>';
            for ($i = 1; $i <= 9; $i++) {
                $v = $newj * $i;
                echo "{$newj}x{$i} ={$v} <br/>";
            }
            echo '</td>';
        }
        echo '</tr>';
    }

    ?>

</table>