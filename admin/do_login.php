<?php

	
	if($_POST["usernavn"] == "123" && $_POST["password"] == "123"){
		session_start();	
		$_SESSION["usernavn"] = $_POST["usernavn"];
		$_SESSION["password"] = $_POST["password"];
		header("Location: admin.php");
		exit;
	}
	else{
		header("Location: login.php?besked=Brugernavn+eller+andgangskode+er+forkert");
		exit;
	}
	
?>