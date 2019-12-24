<?php
/* Write a PHP script, to check whether the page is with 'https' or 'http'
to check need $_SERVER super variable 
*/
if(isset($_SERVER['https'])){
    echo "Https";
}else{
    echo "http";
}