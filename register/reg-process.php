<?php

require('helper.php');


//error variables
$error = array();

$firstName = validate_text($_POST['firstName']);
$lastName = validate_text($_POST['lastName']);
$email = validate_email($_POST['email']);
$password = validate_text($_POST['password']);
$con_password = validate_text($_POST['confirm_password']);

if(empty($firstName)){
    $error[]= "Please enter your first name";
}
if(empty($lastName)){
    $error[]= "Please enter your last name";
}
if(empty($email)){
    $error[]= "Please enter your email address";
}
if(empty($password)){
    $error[]= "Please enter your password";
}
if(empty($con_password)){
    $error[]= "Please enter your confirm password";
}


if(empty($error)){
    echo 'validate';
}else{
    echo 'not validate';
}







?>