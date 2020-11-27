<?php

require('helper.php');


//error variables
$error = array();

$firstName = validate_text($_POST['firstName']);
$lastName = validate_text($_POST['lastName']);
$email = validate_email($_POST['email']);
$password = validate_text($_POST['password']);
$con_password = validate_text($_POST['confirm_password']);
$profileImage= 'image';

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

//GET FILES from the profileupload form id
$files= $_FILES['profileUpload'];
upload_profile($files);



if(empty($error)){
    //register a new user
    $hashed_pass= password_hash($password, PASSWORD_DEFAULT);
    require('mysqli_connect.php');

    //make a query
    $query= "INSERT INTO user (userID, firstName, lastName, email, password, profileImage, registerData)";
    $query.="VALUES('',?,?,?,?,?,NOW())";

    //initialize a statement
    $q= mysqli_stmt_init($connection);

    //prepara sql statemnt for sql injection
    mysqli_stmt_prepare($q,$query);

    //bind values
    mysqli_stmt_bind_param($q,'sssss', $firstName, $lastName, $email, $hashed_pass, $profileImage);

    //execute stmt
    mysqli_stmt_execute($q);

    if(mysqli_stmt_affected_rows($q)==1){
        print "record successfully inserted";

    }else{
        print "Error while registration!";
    }




}else{
    echo 'not validate';
}







?>