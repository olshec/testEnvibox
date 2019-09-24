<?php

namespace MyCompany\Contact;

class PathRequestFile implements PathRequest
{
  
    private $path;
    
    public function addPath() {
        ;
    }
    

    
    public function ContactStorageFile(){
        $this->path = 'load/';
    }
    
    public function ContactStorageFile(string $path){
        setPath($path);
    }
    
    public function setPath(string $path){
        $this->path = $path;
    }
    
}

