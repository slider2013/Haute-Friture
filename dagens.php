<!--henter dagens ret, og antal til brug på siden-->
<?php
		$array = unserialize(file_get_contents("admin/data/retter/dagens/dagens.txt"));
		$billede = $array['billede'];
		$beskriv = $array["beskriv"];
		$navn = $array['navn'];
		

		$array = unserialize(file_get_contents("admin/data/retter/antal/antal.txt"));
		$total_antal = $array["totalantal"];
		$antal = $array["antal"];

?>
<section id="dagens">
         <div id="content">
                <h5>Dagens Ret:</h5>
                <div id="tape">
                	<img src="images/vfowlertape3.png" alt="tape">
                </div>
                <div id="image">
                	<div id="meter">
                    <p>Retter tilbage<p>
                        <progress value="<?php echo $antal?>" max="<?php echo $total_antal?>"	
                        </progress>
           			 </div>
                		<!--javascript der viser en lightbox, med info om retten-->
                		<a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'">
                        	<img src="admin/<?php echo $billede; ?>" alt="dagens_ret">
                        </a>
                	<div id="image_title"><h3><?php echo $navn; ?></h3></div>
                </div>
            </div>
            <!--her lukkes den igen-->
        <a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">
            <aside id="light" class="white_content">
                <h2><?php echo $navn; ?>:</h2>
                <p><?php echo $beskriv; ?></p>
            </aside>
        </a>
        <a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">
			<div id="fade" class="black_overlay"></div>
        </a>
		<aside id="no_light">
        	<h2><?php echo $navn; ?>:</h2>
        	<p><?php echo $beskriv; ?></p>
        </aside>
</section>