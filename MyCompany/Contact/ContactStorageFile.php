<?php

namespace MyCompany\Contact;

use Exception;

class ContactStorageFile implements ContactStorage
{
    private $nameFile;
    private $path;

  
    
    public function __construct(string $path, string $nameFile) {
        $this->setPath($path);
        $this->setNameFile($nameFile);
    }
    
    public function save(string $name, string $numberTelephone, string $message):bool {
        
        try {
           return file_put_contents($this->path.$this->nameFile,"name: $name \n telephone: $numberTelephone \n message: $message \n\n", FILE_APPEND);
        }
        catch(Exception $e)
        {
            echo "save failed: " . $e->getMessage();
        }
    }
    
    public function setNameFile(string $nameFile){
        $this->nameFile = $nameFile;
    }
    
    public function setPath(string $path){
        $this->path = $path;
    }
    
    
}

