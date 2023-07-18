<?php
include 'kunapis.php';
$myBike = new Bike();

$myBike->upSpeed();
echo $myBike->getSpeed();
echo "<hr>";
$myBike->downSpeed();
echo $myBike->getSpeed();
echo "<hr>";

$myScooter = new Scooter();
$myScooter->changeGear();
$myScooter->upSpeed();
$myScooter->upSpeed();
$myScooter->upSpeed();
$myScooter->upSpeed();
$myScooter->upSpeed();
$myScooter->upSpeed();
echo $myScooter->getspeed();


?>