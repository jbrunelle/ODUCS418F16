<?php


session_start();

include_once "db.php";

if($_POST && check_login($_POST['username'],$_POST['password'])){
   $_SESSION['username'] = $_POST['username'];
   $_SESSION['loggedIn'] = True;
   
   header("location: index.php");
   exit();
   session_write_close();
}elseif($_POST) {
  echo "Unsuccessful login<br><br>";
  echo "the session variable contents:<br>";
  print_r($_SESSION);
}else {
  echo "You're not logged in";
  echo "<br><br>the session variable contents:<br>";
  print_r($_SESSION);
}

?>






