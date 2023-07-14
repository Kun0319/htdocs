<?php
$a[] = 1;
$a[] = 12.3;
$a[] = 'kun';
var_dump($a);
echo '<hr/>';
$a['name'] = 'kun';
$a['gender'] = true;
$a['weight'] = 64;
$a['age'] = 23;
echo $a['name'];
echo '<hr/>';
var_dump($a);


?>