<?php

namespace MyCompany\Contact;

class StorageSubsystemDB extends StorageSubsystem
{
    
    public function createContactStorage():ContactStorage {
        return new ContactStorageDB('localhost', 'mydb', 'test', '123');
    }
    
    public function createPathRequest():PathRequest {
        return new PathRequestDB();
    }
    
}