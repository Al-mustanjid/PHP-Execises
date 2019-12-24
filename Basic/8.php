<?php
/* Write a PHP script, which will return the following components of the url 'https://www.w3resource.com/php-exercises/php-basic-exercises.php'
List of components : Scheme, Host, Path
Expected Output :
Scheme : http
Host : www.w3resource.com
Path : /php-exercises/php-basic-exercises.php

Ans: parse_url() */

$url = parse_url('https://www.w3resource.com/php-exercises/php-basic-exercises.php');
echo "Scheme: ".$url['scheme'];
echo '<br/>';
echo "Host: ".$url['host'];
echo '<br/>';
echo "Path: ".$url['path'];