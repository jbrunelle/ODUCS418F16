<?php

session_start();

if($_GET && $_GET['action'] && $_GET['action']=="logout"){
	unset($_SESSION['loggedIn']);
	unset($_SESSION['username']);
}

if(!$_SESSION['loggedIn']){
	header("location: login.php");
	die();
}

include_once "db.php"

?>
<html>
<head>
<title>Homepage</title>
</head>
<body>

<p>Welcome <?= $_SESSION['username'] ?>! (<a href="index.php?action=logout">log out</a>)</p>

<p>These are your session variable parts:<br></p>
<p>
<?php 
print_r($_SESSION);
echo "<br><br></p>";
?>

<p>Check out these questions!</p>

<?php

//list all questions
$qs = getQuestions();

$str = "<ul>";
foreach($qs as $id=>$q){
	$str .= "<li><a href=\"question.php?id=$id\">$q</a></li>";

}
$str .= "</ul>";
	
echo $str;

?>
</body>
</html>
