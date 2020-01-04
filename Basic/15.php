<?php
/*Q15: Write a PHP script to get last modified information of a file
Sample filename : php-basic-exercises.php
Sample Output : Last modified Monday, 26th June, 2017, 12:43pm

To get the last modified time of a file, filemtime() func is used
*/

//current file
$this_file = basename($_SERVER['PHP_SELF']);
date_default_timezone_set('Asia/Dhaka');
$last_modify = filemtime($this_file);

echo "File Name: ".$this_file."<br/>";
echo "Last modified: ".date('l, dS F, Y, h:ia',$last_modify);