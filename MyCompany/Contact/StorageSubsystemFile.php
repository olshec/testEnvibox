<?php

namespace MyCompany\Contact;

class StorageSubsystemFile extends StorageSubsystem
{
    
    public function createContactStorage():ContactStorage {
        return new ContactStorageFile('load/','file1.txt');
    }
    
}

