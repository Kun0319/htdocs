<table width="100%" hight="100%" border="1">

    <?php
    // 常數命名
    define('ROWS', 2);
    define('COL', 4);
    define('START', 2);


    for ($k = 0; $k < ROWS; $k++) {
        echo '<tr>';
        for ($j = START; $j <= (START + COL - 1); $j++) {
            $newj = $j + $k * COL;
            $p = '<td bgcolor=pink>';
            $y = '<td bgcolor=yellow>';
            for ($i = ROWS; $i <= (START + COL - 1); $i++) {
                if ($j % 2 == 0 && $k % 2 == 0) {
                    echo $y;
                } else if ($j % 2 != 0 && $k % 2 == 0) {
                    echo $p;
                } else if ($j % 2 != 0 && $k % 2 == 1) {
                    echo $y;
                } else if ($j % 2 == 0 && $k % 2 == 1) {
                    echo $p;
                } else {
                    echo 'Hello,ERROR';
                }

                for ($i = 1; $i <= 9; $i++) {
                    $v = $newj * $i;
                    echo "{$newj}x{$i} ={$v} <br/>";
                }
                echo '</td>';
            }
        }
    }


    echo '</tr>';


    ?>

</table>