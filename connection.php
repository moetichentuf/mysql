<?php
class Connection{
private $pdo;
    function openConnection() {
        // Try to figure out what these should be for you
        $dbhost    = "localhost";
        $dbuser    = "moeti";
        $dbpass    = "111111";
        $db        = "becode";

        // Try to understand what happens here
        $this->pdo = new PDO('mysql:host='. $dbhost .';dbname='. $db, $dbuser, $dbpass);

        // Why we do this here
        //return $pdo;
    }

    function checkConnection()
    {
        $this->openConnection();
        try {
            //  $returnValue = openConnection();
            // set the PDO error mode to exception
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return true;

        } catch (PDOException $e) {
            return "Connection failed: " . $e->getMessage();
        }
    }

    function sendData($firstName , $LastName){

        $sql = "INSERT INTO student_table (firstName, lastName) VALUES (?,?)";
        $stmt= $this->pdo->prepare($sql);
        $stmt->execute([$firstName, $LastName]);

    }
}
