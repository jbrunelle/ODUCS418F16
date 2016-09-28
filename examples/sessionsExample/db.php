<?php

// This would normally access your database but is hard-coded here for demo's sake
function check_login($u,$p){
	$validCredentials = array(
'admin' => 'cs518pa$$',
'jbrunelle' => 'M0n@rch$',
'pvenkman' => 'imadoctor',
'dbarrett' => 'fr1ed3GGS',
'ltully' => '<!--<i>',
'espengler' => 'dont cross the streams',
'winston' => 'zeddM0r3',
'gozer' => 'd3$truct0R',
'slimer' => 'f33dM3',
'keymaster' => 'n0D@na',
'gatekeeper' => '$l0r',
'staypuft' => 'm@r$hM@ll0w'
	);

	return array_key_exists($u,$validCredentials) && $validCredentials[$u] == $p;	
}

// This is meant to simulate your database query
function getQuestions($andAnswers = false){
	$questions = array(
		'42' => "What is the answer to life, the universe, and everything?",
		'9' => "What is the best car?",
		'2' => "[Knock Knock Knock] Penny?",
		'16' => "What is the biggest state?"
	);
	
	if(!$andAnswers){return $questions;}
	
	$answers = array(
		42 => "42",
		9 => array( "Ford Mustang", "Chevy Camaro", "Dodge Challenger"),
		16 => "California?"
	);
	return [$questions,$answers];
}

?>
