<?php
/*
Write a PHP script to get the current file name
Computer file: A computer file is a computer resource on a computer that 
stores data, information, picture, video, settings, or commands used with a computer program

:we can use basename() function and $_SERVER with 'PHP_SELF'
*/
$current_file_name = basename($_SERVER['PHP_SELF']);
echo $current_file_name;
