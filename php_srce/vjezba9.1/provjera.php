<?php
$path = "/var/www/html/php/php_repo/php_srce/vjezba9.1/";

echo "Path : $path";
echo "<br/>";

$user = posix_getpwuid(posix_geteuid());

var_dump($user);

require "$path";
?>