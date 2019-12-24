<?php
/* Write a PHP script, which changes the color of the first character of a word
Sample string : PHP Tutorial

Expected Output :
PHP Tutorial
=======================================
preg_replace() function:
mixed preg_replace ( mixed $pattern , mixed $replacement , mixed $subject [, int $limit = -1 [, int &$count ]] )
Searches subject for matches to pattern and replaces them with replacement. The function returns an array if the subject parameter is 
an array, or a string otherwise. If matches are found, the new subject will be returned, 
otherwise subject will be returned unchanged or NULL if an error occurred
*/
$string = "PHP Tutorial";
$string = preg_replace('/(\b[a-z])/i','<span style = "color:red;">\1</span>', $string); //matched pattern, replacement, changed subject or value
echo $string;