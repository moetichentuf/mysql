<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'connection.php';
require 'insert.php';

$lala = new Connection();
$returnValue = $lala->checkConnection();


if (($_SERVER['REQUEST_METHOD'] == 'POST')) {

    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $lala->sendData($firstName, $lastName);
}else{
    echo $returnValue;
}


