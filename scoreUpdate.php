<?php
	$data = $_COOKIE['CookPass'];

	$inp = file_get_contents('LeaderBoard.json');
	$newsub = substr($inp, 0, -1);
	$newsub = $newsub . $data;
	file_put_contents('LeaderBoard.json', $newsub);
?>
