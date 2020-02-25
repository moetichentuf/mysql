<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'connection.php';
require 'insert.php';

$lala = new Connection();
$returnValue = $lala->checkConnection();

if ($returnValue == true ){
 echo "connection true";

 $lala->sendData('moeti' , 'test');
}else{
    echo $returnValue;
}


