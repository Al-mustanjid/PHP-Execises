<?php
/* Write a PHP script to redirect a user to a different page.

header() function
header() is used to send a raw HTTP header.

void header ( string $header [, bool $replace = TRUE [, int $http_response_code ]] )
header: The header string.
replace: The optional replace parameter indicates whether the header should replace a previous similar header, or add a second header of the same type.
http_response_code: Forces the HTTP response code to the specified value. Note that this parameter only has an effect if the header is not empty.
*/

header("Location: https://al-mustanjid.github.io/mustanjid.info/index.html");