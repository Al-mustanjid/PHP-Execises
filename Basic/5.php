<?php
/*Q5: Write a PHP script to get the client IP address

Ans: To get client address we have to think in different ways
1.whether ip is from share internet- HTTP_CLIENT_IP
2.whether ip is from proxy- HTTP_X_FORWARDED_FOR
3.whether ip is from remote address - REMOTE_ADDR
*/
if(!empty($_SERVER['HTTP_CLIENT_IP'])){
    $client_ip_add = $_SERVER['HTTP_CLIENT_IP'];
}elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
    $client_ip_add = $_SERVER['HTTP_X_FORWARDED_FOR'];
}else{
    $client_ip_add = $_SERVER['REMOTE_ADDR'];
}
echo $client_ip_add;