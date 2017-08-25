<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, user-scalable=false;">
<meta charset="utf-8">
<title>Haute Friture, grillbar på den fede måde</title>
<link rel="icon" type="image/png" href="images/favicon.png">
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

	<div id="wrapper">
        <header>
            <h1>Haute Friture</h1>
            <h4>Hver dag 11 - 22</h4>
        </header>
        <nav id="desk_tab_nav">
            <ul id="tab_desk_menu">
                <li><a href="index.php?page=dagens.php"><h2>Dagens Ret</h2></a></li>
                <li><a href="index.php?page=menu.php"><h2>Menu</h2></a></li>
                <li><a href="index.php?page=om.php"><h2>Om os</h2></a></li>
            </ul>
            
            <div id="desk_menu_div">
            	<img src="images/hor_border.png" alt="hor_border">
            </div>
            <div class="social">
                <ul>
                    <li><a href="http://www.facebook.com/hautefrituredk"><img src="images/facebook.png" alt="facebook"></a></li>
                    <li><img src="images/instagram.png" alt="instagram"></li>
                </ul>
            </div>
		</nav>
        <div id="long_boarder">
        	<img src="images/vert_long_border.png" alt="vert_long_boarder">
        </div>
        <!--php includes, henter tilladt indhold til siden -->
        <?php
		$page = $_GET['page'];
		$pages = array('dagens.php','menu.php','om.php');
		if (!empty($page)) {
			if(in_array($page,$pages)) {
				include($page);
			}
			else{
				include('dagens.php');
			}
			}
			else {
			include('dagens.php');
		}
		
		?>          
        <footer>
        	<div id="address"></div>
            <nav id="mob_footer_nav">
            	<div class="social">
                    <ul>
                        <li><a href="http://www.facebook.com/hautefrituredk"><img src="images/facebook.png" alt="facebook"></a></li>
                        <li><img src="images/instagram.png" alt="instagram"></li>
                    </ul>
                </div>
                <img id="hor_border" src="images/hor_border.png" alt="hor_border">
                <ul id="menu">
                    <li><a href="index.php?page=dagens.php"><h2>Dagens Ret</h2></a></li>
                    <li class="menu_img"><img src="images/vert_border.png" alt="vert_border"></li>
                    <li><a href="index.php?page=menu.php"><h2>Menu</h2></a></li>
                    <li class="menu_img"><img src="images/vert_border.png" alt="vert_border"></li>
                    <li><a href="index.php?page=om.php"><h2>Om os</h2></a></li>
                </ul>
            </nav>	
        </footer>
     </div>
<!--<script src="js/show_device_width_height.js"></script>
--></body>
</html>