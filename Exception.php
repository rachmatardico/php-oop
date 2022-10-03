<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/Validation.php";

$loginRequest = new LoginRequest();
$loginRequest->username = "  ";
$loginRequest->password = "  ";

try{
    validateLoginRequest($loginRequest);
} catch(ValidationException | Exception $exception){
    echo "Error : {$exception->getMessage()}" . PHP_EOL;

    var_dump($exception->getTrace());
    echo $exception->getTraceAsString() . PHP_EOL;
} finally{
    echo "ERROR GA ERROR, TETEP DI EKSEKUSI" . PHP_EOL;
}
