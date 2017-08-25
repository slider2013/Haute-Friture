<?php
	require_once("includes/header.inc.php");
	if(!isset($_POST["file"])){
		die("Go away!");		
	}
	if(!session_id()){
		session_start();	
	}
		
		$file = $_POST["file"];
		$array = unserialize(file_get_contents($file));
		$billede = $array['billede'];
		unlink($billede);
		unlink($file);
		header("Location: admin.php");

	require_once("includes/footer.inc.php");
?>
<!--Sletter postede fil og dermed retten-->