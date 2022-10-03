<?php

require_once "data/SayGoodBye.php";
use Data\Traits\Person;

$person = new Person();
$person->goodbye("Joko");
$person->hello("Budi");
$person->name = "Eko";
var_dump($person);
$person->run();