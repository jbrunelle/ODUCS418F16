<?php

session_start();

if(!$_SESSION['loggedIn']){
	header("location: login.php");
	die();
}

include_once "db.php";

?>
<html>
<head>
<title>Homepage</title>
</head>
<body>

<p>Welcome to a question page, <?= $_SESSION['username'] ?>! (<a href="index.php?action=logout">log out</a>)</p>
<p><a href="index.php">&lt; Go Back to Questions List</a></p>

<?php

if(!$_GET || !$_GET['id']){
	echo "No questions available with the parameters (or lack of) you specified.";
	die();
}

?>

<p>Check out this questions!</p>

<?php

//list all questions
$alsoGetAnswers = true;
list($questionsIn,$answersIn) = getQuestions($alsoGetAnswers);

$qText = "";

foreach($questionsIn as $qKey=>$qContent){
	if($qKey == $_GET['id']){
		$qText = $qContent;
		break;
	}
}

if($qText == ""){ //we didn't find out question
	echo "There was no a question with that id in the database.";
	die();
}

$answers = null;
foreach($answersIn as $aKey=>$aContent){
	if($aKey == $_GET['id']){
		$answers = $aContent;
		break;
	}
}

echo $qText."<br />";

if(is_array($aContent)){
	echo "Answers:<ul><li>".implode("</li><li>",$aContent)."</li></ul>";
}elseif($answers) {
	echo "Answer: ".$aContent;
}else {
	echo "No answers for this question yet.";
}

?>

</body>
</html>