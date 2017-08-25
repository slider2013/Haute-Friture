<?php 
    session_start();
	require_once("includes/header.inc.php");
?>

<h1>Haute Friture Admin</h1>

<!--Form til at sætte antal af dagens retter-->
<div class="col-md-6"><form role="form" action="antal.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
   <label for="navn">Ca. antal af dagens ret:</label>
    <input type="text" class="form-control" name="antal" id="antal" placeholder="Antal" />
  </div>
  <button type="submit" class="btn btn-warning" name="send" />Opret</button>
</form></div>

<!--Form til at tælle ned på antal af dagens retter-->
<div class="col-md-6"><form role="form" action="edit_antal.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
   <label for="navn">Retter Solgt (trækkes fra de resterne retter)</label>
    <input type="text" class="form-control" name="solgt" id="solgt" placeholder="Antal" />
  </div>
  <button type="submit" class="btn btn-warning"name="send" />Solgt</button>
</form></div>

<!--viser der nuværende antal-->
<?php 
    $array = unserialize(file_get_contents("data/retter/antal/antal.txt"));
	$antal = $array["antal"];
	echo "<h2>Antal tilbage: $antal</h2>";
?>

<!--Kanp til at oprette ny ret-->
<form role="form" action="create_ret.php" method="post">
<button type="submit" class="btn btn-success" name="send">Opret en ny dagens ret</button>
</form>

<!--Liste of over dagens retter-->
<?php

if(!isset($_SESSION['usernavn']) || !isset($_SESSION['password']) and !isset($_GET["besked"])){
 header("Location: login.php?besked=du+skal+logge+ind+før+du+kan+fortsætte");
}	
	else{
		$dir    = 'data/retter/data/';
	$files1 = scandir($dir);
	unset($files1[0]);
	unset($files1[1]);
	echo "<table class='table'><tr><td>Retter:</td><td></td><td></td><td></td></tr>";
	 foreach($files1 as $ret){
		 $file = "$dir"."$ret";
		 $navnforfile = explode(".", $ret);
		 $navn = $navnforfile[0];
		 echo "<tr><td>$navn</td>
		 	<td>
			<form action ='show.php' method='post'>
  			<button type='submit' class='btn btn-danger' name='show'/>Se ret</button>
			<input type='hidden' name='file' value='$file'/></form>
			</td>
			<td>
			<form action ='delete.php' method='post'>
  			<button type='submit' class='btn btn-danger' name='delete'/>Slet</button>
			<input type='hidden' name='file' value='$file'/>
			</form>
			</td>
			<td>
			<form action ='make_dags.php' method='post'>
  			<button type='submit' class='btn btn-danger' name='make'/>Gør til dagens ret</button>
			<input type='hidden' name='file' value='$file'/>
			</form>
			</td>
			</tr>";
		 
		}
	}
	?>

</table>
<form role="form" action="logout.php">
<button type="submit" class="btn btn-warning">Logout</button>
</form>

<?php
	require_once("includes/footer.inc.php");
?>