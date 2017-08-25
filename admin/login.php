<?php
	require_once("includes/header.inc.php");
	if(isset($_GET["besked"])){
		echo "<h2>" . $_GET["besked"] . "</h2>";
	}
	else
	{
		echo "<h2>Login</h2>";
	}
	
	
?>
<!--form til login-->
<form class="form-horizontale" role="form" action="do_login.php" method="post">
  <div class="form-group">
    <label class="sr-only" for="navn">Brugernavn</label>
    <input type="text" class="form-control" name="usernavn" id="usernavn" placeholder="Skriv dit brugernavn" />
  </div>
  <div class="form-group">
    <label class="sr-only" for="password">Password</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Skriv dit password" />
  </div>
  <button type="submit" class="btn btn-warning"name="send">Login</button>
</form>
<footer>
        <form role="form" action="../index.php">
        <button type="submit" class="btn btn-success">Hovedside</button>
        </form>
</footer>
<?php
	require_once("includes/footer.inc.php");
?>