<table width="100%" border="1">

    <?php
    for ($k = 0; $k < 5; $k++) {
        echo '<tr>';
        for ($j = 2; $j <= 5; $j++) {
            $newj = $j + $k * 4;
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