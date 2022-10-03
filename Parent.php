<?php

require_once "data/Shape.php";

use Data\{Shape, Rectangle};

$shape = New Shape();
echo $shape->getCorner() . PHP_EOL;

$rectangle = New Rectangle();
echo $rectangle->getCorner() . PHP_EOL;
echo $rectangle->getParentCorner() . PHP_EOL;