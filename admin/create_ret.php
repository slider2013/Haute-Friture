<?php
	require_once("includes/header.inc.php");
	if(!isset($_POST["send"])){
		die("Go away!");		
	}
	if(!session_id()){
		session_start();	
	}
?>
<!--Form oprette en ret-->
<form role="form" action="ret_check.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
   <label for="navn">Rettens navn:</label>
    <input type="text" class="form-control" name="navn" id="navn"/>
  </div>
  <div class="form-group">
   <label for="navn">Beskrivelse af retten:</label>
    <textarea rows="4" type="text" class="form-control" name="beskriv" id="beskriv"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputFile">Billede upload af retten:</label>
    <input type="file" name="billede" id="billede" value"Upload"/>
    <p>Find et billede du vil uploade</p>
  </div>
  <button type="submit" class="btn btn-warning"name="send" />Videre</button>
</form>

<footer>
       
</footer>
<?php
	require_once("includes/footer.inc.php");
?>