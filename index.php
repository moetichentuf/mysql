<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'Model/connection.php';
require 'View/insert.php';

$lala = new Connection();
$returnValue = $lala->checkConnection();


if (($_SERVER['REQUEST_METHOD'] == 'POST')) {

    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $userName = $_POST['user-name'];
    $linkedin = $_POST['linkedin'];
    $github = $_POST['github'];
    $email = $_POST['email'];
    $avatar = $_POST['avatar'];
    $video = $_POST['video'];
    $quote = $_POST['quote'];
    $quoteAuthor = $_POST['quote-author'];
    $preferred_language = $_POST['preferred-language'];
    $lala->sendData($firstName, $lastName, $userName, $linkedin, $github, $email, $avatar, $video, $quote, $quoteAuthor, $preferred_language);
}else{
    echo $returnValue;
}


