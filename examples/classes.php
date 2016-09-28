<?php
class Person {
	function __construct($name){
		$this->name = $name;
	}
	function whatDoYouDo(){
		echo $this->name." dances!";
	}
}

class Programmer extends Person {
	function startCoding($language){
		echo $this->name." is coding in ".$language."!";
	}
	function whatDoYouDo(){
		echo $this->name." codes!";
	}
}

$mary = new Person("Mary");
$john = new Programmer("John");

?>


<html> 
<head>
<title>PHP Test</title>
</head> 
<body> 
<table border=1>
<tr><th>Variable<th>Value
<tr><td>Mary->whatDoYouDo<td> <?php echo $mary->whatDoYouDo(); ?>
<tr><td>John->whatDoYouDo<td><?php echo $john->whatDoYouDo(); ?>
<tr><td>John->startCoding<td> <?php echo $john->startCoding("PHP"); ?>
</table>
</body> 
</html>
