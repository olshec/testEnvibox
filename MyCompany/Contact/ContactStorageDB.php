<?php

namespace MyCompany\Contact;

use PDO;
use PDOException;

class ContactStorageDB implements ContactStorage
{
    
    
    private $servername;
    private $dbname;
    private $username;
    private $password;
    
    public function __construct($servername, $dbname, $username, $password) {
        $this->setServername($servername);
        $this->setNameDB($dbname);
        $this->setUsername($username);
        $this->setPassword($password);
    }
    
    public function save(string $path, string $numberTelephone, string $message) {
        try {
            $this->connString = "mysql:host=$this->servername;dbname=$this->dbname";
            $conn = new PDO($this->connString, $this->username, $this->password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully";
            $stmt = $conn->prepare("INSERT INTO contactInfo (name, telephone, message) VALUES (?, ?, ?)");
            $stmt->execute(array($path, $numberTelephone,  $message));
            return TRUE;
        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
            return FALSE;
        }
        
    }
    
    public function setServername(string $servername){
        $this->servername = $servername;
    }
    
    public function setNameDB(string $dbname){
        $this->dbname = $dbname;
    }
    
    public function setUsername(string $username){
        $this->username = $username;
    }
    
    public function setPassword(string $password){
        $this->password = $password;
    }
    
    
    
}