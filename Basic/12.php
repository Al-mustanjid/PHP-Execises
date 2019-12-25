<?php
/* Q:  Write a simple PHP program to check that emails are valid.
    Hints : Use FILTER_VALIDATE_EMAIL filter that validates value as an e-mail address.

    Ans: filter_var() function is used for validate an email with FILTER_VALIDATE_EMAIL flag
*/
$email = "abc@gmail.com";

if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo '"'.$email.'"'.' = Valid';
}else{
    echo $email." : "." = Invalid";
}