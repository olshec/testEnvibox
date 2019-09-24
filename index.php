<?php 

namespace Main;

use \MyCompany\Contact as contact;  

require __DIR__ . '/vendor/autoload.php';


if(!isset($_POST['name'])){
    $file = file_get_contents('sourceIndex.html');
    echo $file;
}
else{
    
    if($_POST['storagePlace'] == 'file'){
        $client = (new contact\StorageSubsystemFile())->createContactStorage();
    }
    else {
        $client = (new contact\StorageSubsystemDB())->createContactStorage();
    } 
    if($client->save($_POST['name'], $_POST['telephone'], $_POST['message']))
       echo 'Данные успешно сохранены';
    else 
       echo 'Данные не сохранены, попытайтесь еще раз.';
}





