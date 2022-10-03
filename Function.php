<?php

require_once "data/Person.php";

$eko = new Person("Eko", "Subang");
$eko->sayHello(null);

$joko = new Person("Joko", "Cirebon");
$joko->name = "joko";
$joko->sayHello("eko");

$joko->info();
$eko->info();

