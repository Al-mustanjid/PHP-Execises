<?php
/* Q: Write a PHP script to display source code of a webpage (e.g. "http://www.example.com/")

Ans: actually it is also a computer file which must be located somewhere. to get all lines we need to access
as file then to see each line need foreach loop
*/
$get_all_lines = file("https://al-mustanjid.github.io/mustanjid.info/index.html");

foreach($get_all_lines as $lines=>$lines_content){
    echo "Line no: ".$lines.htmlspecialchars($lines_content)."\n";
}