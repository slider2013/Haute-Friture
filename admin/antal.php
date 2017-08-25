<?php
	require_once("includes/header.inc.php");
	if(!isset($_POST["send"])){
		die("Go away!");		
	}
	if(!session_id()){
		session_start();	
	}
	$total_antal = $_POST["antal"];
	$mingle = array(
		"totalantal" => $total_antal,
		"antal" => $total_antal);
		
	$mingle_file = "data/retter/antal/antal.txt";
	$mingle_data = serialize($mingle);
	file_put_contents($mingle_file, $mingle_data);
	header("Location: admin.php?besked=finish");

	require_once("includes/footer.inc.php");
?>
<!--Gemmer antal af dagens retter i antal.txt-->