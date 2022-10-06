<?php

require_once "Vehicle.php";
require_once "Truck.php";

$truckRed = new Truck("red", 3, 200);
echo $truckRed->getStockCapacity() . "<br>";
echo $truckRed->forward() . "<br>";
echo $truckRed->getStateLoad() . "<br>";
$truckRed->setCurrentLoad(400);
echo $truckRed->getStateLoad() . "<br>";
