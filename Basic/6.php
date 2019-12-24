<?php
/* Q6: Write a simple PHP browser detection script.

A web browser is a software application for accessing information on the World Wide Web
*/
echo "Your Agent is: ".$_SERVER['HTTP_USER_AGENT'];
print_r(get_browser());