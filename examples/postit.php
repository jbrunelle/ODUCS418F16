<html>
<body>
<form method="post" action="postit.php">
<input type="text" name="username" />
<br><br>
<?php
 echo "POSTED THIS: <b>" . $_POST['username'] . "</b>";
?>
</form>
</body></html>
