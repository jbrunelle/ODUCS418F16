<html> 
<head>
<title>PHP Test</title>
</head> 
<body> 
<table border=1>
<tr><th>Variable<th>Value
<tr><td>$_SERVER['HTTP_USER_AGENT']<td> <?php echo $_SERVER['HTTP_USER_AGENT']; ?>
<tr><td>strlen($_SERVER['HTTP_USER_AGENT'])       <td><?php echo strlen($_SERVER['HTTP_USER_AGENT']); ?>
<tr><td>print_r($_GET);<td> <?php print_r($_GET) ; ?>
<tr><td>$_GET['justin'];<td> <?php echo $_GET['justin'] ; ?>
<tr><td>print_r($_GET);<td> <?php  ; ?>
<tr><td>print_r($_GET);<td> <?php  ; ?>
</table>
</body> 
</html>
