<?php
	require_once("includes/header.inc.php");
	if(!isset($_POST["finish"])){
		die("Go away!");		
	}
	if(!session_id()){
		session_start();	
	}
	$navn = htmlspecialchars($_SESSION["navn"]);
	$beskriv = htmlspecialchars($_SESSION["beskriv"]);
	$type = explode(".", $_SESSION["uploadedimg"]);
	$billede = "data/retter/images/$navn.$type[1]";
	$tal = rand();
	if(file_exists($billede)){
		rename($_SESSION["uploadedimg"],$tal.$billede);
		$billede = $tal.$billede;
	}
	else{	
		rename($_SESSION["uploadedimg"],$billede);
	}
	
	$ret = array(
		"navn" => $navn,
		"beskriv" => $beskriv,
		"billede" => $billede);
		
	$ret_file = "data/retter/data/" . strtolower($navn) . ".txt";
	$ret_data = serialize($ret);
	file_put_contents($ret_file, $ret_data);
	header("Location: admin.php?besked=finish");
?>
<?php
	require_once("includes/footer.inc.php");
?>
<!--færdig gøre oprettelsen af retter, serializer dem og gemmer array i en txt fil -->