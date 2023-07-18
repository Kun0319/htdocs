<?php
// function checkTWID($id)
// {
//     $ret = false;

//     if (strlen($id) == 10){
//         $c1 = substr($id, 0, 1);
//         $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
//         if (strpos($letters, $c1) !== false) {
//             $ret = true;
//         }
//     }
//     return $ret;
// }

include 'Kunapis.php';

if (checkTWId('A123456789')) {
    echo 'OK';
} else {
    echo 'XX';
}
?>