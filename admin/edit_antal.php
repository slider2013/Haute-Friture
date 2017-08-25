<?php
		require_once("includes/header.inc.php");
		if(!isset($_POST["solgt"])){
		die("Go away!");		
		}
		if(!session_id()){
		session_start();	
		}
		
		$array = unserialize(file_get_contents("data/retter/antal/antal.txt"));
		$antal = $array["antal"];
		$nyt_antal = $antal - $_POST["solgt"];
		$replacements = array("antal" => $nyt_antal); 
		
		$basket = array_replace($array, $replacements);
		
		$antal_file = "data/retter/antal/antal.txt";
		$antal_data = serialize($basket);
		file_put_contents($antal_file, $antal_data);
		header("Location: admin.php?besked=finish");
		
		require_once("includes/footer.inc.php");
?>
<!--tæller det total antal retter ned med det antal postet-->