<?php
class Connection{
private $pdo;
    public function openConnection() {
        // Try to figure out what these should be for you
        $dbhost    = "localhost";
        $dbuser    = "moeti";
        $dbpass    = "111111";
        $db        = "becode";

        // Try to understand what happens here
        $this->pdo = new PDO('mysql:host='. $dbhost .';dbname='. $db, $dbuser, $dbpass);

        // Why we do this here
        return $this->pdo;
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

    function sendData($firstName , $lastName,  $userName, $linkedin, $github, $email, $avatar, $video, $quote, $quoteAuthor, $preferred_language){

        $sql = "INSERT INTO student_table (firstName, lastName, userName, linkedin, github, email, avatar, video, quote, quote_author, preferred_language) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
        $stmt= $this->pdo->prepare($sql);
        $stmt->execute([$firstName, $lastName, $userName, $linkedin, $github, $email, $avatar, $video, $quote, $quoteAuthor, $preferred_language]);

    }
    function getData()
    {

        $sql = 'SELECT * FROM student_table';
        $stmt = $this->openConnection()->prepare($sql);
        $stmt->execute([]);
        return $stmt->fetchALL(PDO::FETCH_ASSOC);


    }

}
