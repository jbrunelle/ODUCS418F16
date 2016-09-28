<html><head><title>This is a require example</title></head>
<body>
<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require 'noWayThisIsAThing.php';
echo "The header should <b>NOTE</b> appear above!";
?>

</body></html>
