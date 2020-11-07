<?php
	
	$answer = $_POST['answer'];
	$check = strcmp($answer,"true"); //Hard code answer from previous question here
	if($check != 0) { //$check will equal 0 if the answer is correct
		header("Location: loser.php"); //Go to loser.php if the answer is wrong. Game over. Else, Continue.
		exit;
	}
?>