<!DOCTYPE html>
<html>
 <head>
   <title>Keyland</title>
   <?php 
    	include("/links.php");
    ?>
   <link rel="stylesheet" type="text/css" href="css/main.css">
 </head>
 <body>
    <?php
    $link = mysqli_connect("127.0.0.1", "root", "", "game_db");
    ?>

 	<?php 
    	include("/header.php");
    ?>
    
 	<main>
 		<img src="img/banner.png" " class="mw-100">
 		<div class="container">
 		    <div class="aboutg">
 	    		<p>Keyland is the 2D MMO RPG. There are a lot of bosse, weapons, armor, dungeons and another things that you would enjoy. Now the game has not been released yet.</p>
 	    	</div>
 	    </div>
 	    <div class="container">
 	    	<div class="title"><h2>Best weapons</h2></div>
 	    </div>
 	    <div class="container">
 	    	<div class="advantages">
 	    		<?php 
 	    		    $bestweapons = mysqli_query($link, "SELECT * FROM `weapons` ORDER BY `reit` DESC LIMIT 3");
 	    		?>
 	    		<?php 
 	    		while ( $bw = mysqli_fetch_assoc($bestweapons)) 
 	    		{
 	    		?>
 	    		<a href="/ditempage.php?id_weapon=<?php echo $bw['id_weapon']; ?>">
 	    		    <div class="advantages_item">	
 	    			    <img src="img/<?php echo $bw['img'];?>" width="200" height="200" alt="">
 	    			    <h3><?php echo $bw['title'];?></h3>
 	    			    <h4><?php echo $bw['quality'];?></h4>
 	    			</div>
 	    		</a>
 	    		<?php } ?>

 	    	</div>
 	    </div>
 	    <div class="container">
 	    	<div class="title"><h2>Best armor</h2></div>
 	    </div>
 	    <div class="container">
 	    	<div class="advantages">	
 	    		<?php 
 	    		    $bestarmor = mysqli_query($link, "SELECT * FROM `armor` ORDER BY `reit` DESC LIMIT 3");
 	    		?>
 	    		<?php 
 	    		while ( $ba = mysqli_fetch_assoc($bestarmor)) 
 	    		{
 	    		?>
 	    		<a href="/armoritem.php?id_armor=<?php echo $ba['id_armor']; ?>">
 	    		    <div class="advantages_item">	
 	    			    <img src="img/<?php echo $ba['img'];?>" width="200" height="200" alt="">
 	    			    <h3><?php echo $ba['title'];?></h3>
 	    			    <h4><?php echo $ba['quality'];?></h4>
 	    			</div>
 	    		</a>
 	    		<?php } ?>
 	    	</div>
 	    </div>
 	    <div class="container">
 		    <div class="aboutg">
 	    		<p>Alize is the young game development company, which tries to do everything to make you enjoy gaming.</p>
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