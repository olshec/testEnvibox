<?php

namespace MyCompany\Contact;



class PathRequestDB implements PathRequest
{

    private $connString;

    public function addPath()
    {}

    public function ContactStorageDB(){
        $this->connString = "mysql:host=localhost;dbname=mydb";
    }
    
    public function ContactStorageDB(string $connString){
        setPath($connString);
    }
    
    public function setPath(string $connString){
        $this->connString = $connString;
    }
    

    
}

