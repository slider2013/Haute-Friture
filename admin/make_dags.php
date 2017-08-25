<?php
	require_once("includes/header.inc.php");
	if(!isset($_POST["file"])){
		die("Go away!");		
	}
	if(!session_id()){
		session_start();	
	}
		
		$file = $_POST["file"];
		$dagens = "data/retter/dagens/dagens.txt";
		copy($file, $dagens);
		header("Location: admin.php");

	require_once("includes/footer.inc.php");
?>
<!--gør postet ret til dagens ret, ved at kopier arrayet til dagens.txt-->