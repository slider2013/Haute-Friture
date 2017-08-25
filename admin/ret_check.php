<?php
	require_once("includes/header.inc.php");
	if(!isset($_POST["navn"])){
		die("Go away!");		
	}
	if(!session_id()){
		session_start();	
	}
	
	if(isset($_POST["navn"])){
		$_SESSION["navn"] = $_POST["navn"];
		$_SESSION["beskriv"] = $_POST["beskriv"];
		$beskriv = $_POST["beskriv"];
		$name = $_POST["navn"];
		
			$billede = $_FILES["billede"];
			$image_name =$billede["name"];
			$tmp_name = $billede["tmp_name"];
			$date = date("Y m d H i s");
			if(file_exists("data/retter/images/$image_name")){
				if(move_uploaded_file($tmp_name, "data/retter/images/($date)$image_name")){
				$_SESSION["uploadedimg"] = "data/retter/images/($date)$image_name";
				echo "<div id='img'><img src='data/retter/images/($date)$image_name'/></div>";
				}
				else{
					echo "<h3>$date$image_name kunne ikke uploades</h3>";
				}
			}
			else{
				if(move_uploaded_file($tmp_name, "data/retter/images/$image_name")){
					$_SESSION["uploadedimg"] = "data/retter/images/$image_name";
					echo "<div id='img'><img src='data/retter/images/$image_name'/></div>";
				}
				else{
					echo "<h3>$image_name kunne ikke uploades</h3>";
				}
			}
		echo "<h3> $name </h3><h3> $beskriv </h3>";
	}

	
?>
 
    <form role="form" action="finish.php" method="post">
 	<button type="submit" class="btn btn-warning"name="finish" value="Se match" />Gem</button>
</form>
<?php
	require_once("includes/footer.inc.php");
?>
<!--viser dig retten før du gemmer den-->