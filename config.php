<?php

/*
Database Configuration File!
user: root
password: blank("")

*/
define ('DB_SERVER', 'localhost');
define ('DB_USERNAME', 'root');
define ('DB_PASSWORD', '');
define ('DB_NAME', 'phploginsystem');


//Try connecting to Database
$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
//Check the connection
if(!$connection){
    die ('connection establishment error '.mysqli_connect_error());
}else{
    echo 'connection successful';
}


?>