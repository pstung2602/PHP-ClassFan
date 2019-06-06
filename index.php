<?php include "Fan.php";
$fan1 = new Fan();
$fan2 = new Fan();

$fan1->setSpeedFast();
$fan1->setRadius(10);
$fan1->setColor("yellow");
$fan1->turnOn();
$fan1->toString();

$fan2->setSpeedMedium();
$fan2->setRadius(5);
$fan2->toString();


