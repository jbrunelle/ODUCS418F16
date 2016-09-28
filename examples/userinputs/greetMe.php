<?php
//error_reporting(-1);
//ini_set('display_errors', 'On');
?>


Hello, <?php 

$input = $_GET["nameEntered"];

print "raw value: " . $input . "<br><br>";

if(empty($input)){
	echo "You have an empty string!";
}
elseif(is_numeric($input)){
	echo "This is a number!";
}

print "<br><br>Here's sanitized input:<br>";
print "escapeshellarg: " . escapeshellarg($input) . "<br>";
print "htmlspecialchars: " . htmlspecialchars($input) . "<br>";
print "mysqli_real_escape_string (note that this needs a $conn variable):<br> " 
	. mysqli_real_escape_string($conn, $input) . "<br>";

print "urlencode: " . urlencode($input) . "<br>";

?>
