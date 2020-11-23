<?php

function validate_text($textValue){

    if(!empty($textValue)){
        //trim the whitespaces
        $trim= trim($textValue);
        //remove illegal chars
        $sanitize_str= filter_var($trim, FILTER_SANITIZE_STRING);
        return $sanitize_str;
    }
    return '';
}

function validate_email($emailValue){

    if(!empty($emailValue)){
        //trim the whitespaces
        $trim= trim($emailValue);
        //remove illegal chars
        $sanitize_str= filter_var($trim, FILTER_SANITIZE_EMAIL);
        return $sanitize_str;
    }
    return '';
}


?>