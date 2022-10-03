<?php

$dateTime = new DateTime();
$dateTime->setDate(1990,1,20);
$dateTime->setTime(10,10,10,0);

$dateTime->add(new DateInterval("P1Y"));

$minusOneMonth = new DateInterval("P1M");
$minusOneMonth->invert = true;
$dateTime->add($minusOneMonth);


var_dump($dateTime);

$now = new DateTime();
$now->setTimezone(new DateTimeZone("America/Los_Angeles"));
var_dump($now);

$string = $now->format("Y-m-d H:i:s");
echo "Waktu saat ini : $string" . PHP_EOL;

$date = DateTime::createFromFormat("Y-m-d H:i:s", "2020-10-10 10:10:10", 
new DateTimeZone("Asia/Jakarta"));
var_dump($date);