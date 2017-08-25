<?php 
    session_start();
	require_once("includes/header.inc.php");
	if(!isset($_POST["file"])){
		die("Go away!");		
	}
	if(!session_id()){
		session_start();	
	}
?>
	 <?php
		$file = $_POST["file"];
		$array = unserialize(file_get_contents($file));
		$billede = $array['billede'];
		$beskriv = $array["beskriv"];
		$navn = $array['navn'];
		echo "<div id='img'><img src='$billede'/></div>";
		echo "<h3>Ret: $navn</h3>";
		echo "<h3>Beskrivelse: $beskriv</h3>";

		

	?>
<form role="form" action="admin.php">
<button type="submit" class="btn btn-warning">Tilbage</button>
</form>
<?php
	require_once("includes/footer.inc.php");
?>
<!--viser dig retten-->