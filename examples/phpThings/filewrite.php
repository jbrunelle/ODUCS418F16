<?php
/**
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/**/

$filename = $_GET["fname"];

echo "writing to $filename...<br><br>";

file_put_contents($filename, "hello justins cs518 class");

/**
$file = fopen($filename, 'w') of die("can't open $filename");

fwrite ($file, "Hello justin's cs518");
fclose($file);
/**/
echo "DONE!";


?>
