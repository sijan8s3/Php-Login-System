<?php

//defining constant variables
define('DB_NAME', 'register_db');
define('DB_USER', 'root');
define('DB_PASSWORD','');
define('DB_HOST', 'localhost');

try{
    
    //connection variable
    $connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);  

    //encoded language
    mysqli_set_charset($connection, 'utf8');

}catch(Exception $ex){
    print 'An error occured: '.$ex->getMessage(); 
}catch(Error $e){
    print 'System is busy!';
}


?>