<?php

if($_FILES){
print "Out files array:<br>";
print_r($_FILES);
print "<br><br>";

  $uploaddir = '/home/jbrunelle/public_html/cs518/examples/uploads/';
  $uploadfile = $uploaddir . basename($_FILES['mkfile']['name']);
  $uploadfile = str_replace(".php",".txt",$uploadfile); //prevent .php files from being uploaded

  if (!$_FILES['mkfile']['error'] && move_uploaded_file($_FILES['mkfile']['tmp_name'],$uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
    chmod($uploadfile,0644);
  } elseif($_FILES['mkfile']['error']){
    echo "Error ".$_FILES['mkfile']['error']."<br />";
  } else {
    echo "Possible file upload attack!";
  }

  print_r($_FILES);
}else {

?>
<!DOCTYPE html>
<html>
<head>
  <title>File Upload example</title>
</head>
<body>
<form enctype="multipart/form-data" action="fileUpload.php" method="post">
  <input type="hidden" name="MAX_FILE_SIZE" value="3000">
  File: <input name="mkfile" type="file">
  <input type="submit" value="Upload!">
</form>

<p>Upload directory's contents</p>

Source:
<?php

show_source(__FILE__);

?>

</body>
</html>
<?php
}

?>
