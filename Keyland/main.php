<!DOCTYPE html>
<head>
	<title>About game</title>
	<?php 
        include("/links.php");
    ?>
    <link rel="stylesheet" type="text/css" href="css/mainp.css">
</head>
<body>
	<?php 
    	include("/header.php");
    ?>
    <main>
        <div class="container">
 		    <div class="aboutg">
 	    		<p>Here you can find information about content in the game.</p>
 	    	</div>
 	    </div>
 	    <div class="container">
 	    	<div class="title"><h1>Сollection</h1></div>
 	    </div>
 	    <div class="container">
 	    	<div class="advantages">
 	    		<a href="/weapons.php">
 	    		    <div class="advantages_item">	
 	    			    <img src="img/Mech.Obichniy_id1_Low.png" width="360" height="360" alt="">
 	    			    <h3>Weapons</h3>
 	    			</div>
 	    		</a>
 	    		<a href="/armor.php">
 	    		    <div class="advantages_item">	
 	    			    <img src="img/helmet_2.png" width="360" height="360" alt="">
 	    			    <h3>Armor</h3>
 	    			</div>
 	    		</a>
 	    		<a href="/items.php">
 	    		    <div class="advantages_item">	
 	    			    <img src="img/heal.png" width="360" height="360" alt="">
 	    			    <h3>Items</h3>
 	    			</div>
 	    		</a>
 	    		<a href="/enemies.php">
 	    		    <div class="advantages_item">	
 	    			    <img src="img/1_1.png" width="360" height="360" alt="">
 	    			    <h3>Enemies</h3>
 	    			</div>
 	    		</a>
 	    	</div>
 	    </div>
 	</main>
 	<?php 
    	include("/footer.php");
    ?>	

    
    <script type="text/javascript" src="js/jquery-3.2.1.min.js" ></script>
    <script type="text/javascript" src="js/script.js" ></script>
</body>
</html>