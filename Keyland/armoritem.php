<!DOCTYPE html>
    <?php
        include("/link.php");

        $ar = mysqli_query($link, "SELECT * FROM `armor` WHERE `id_armor` = " . (int) $_GET['id_armor']);
        
        $a = mysqli_fetch_assoc($ar);
    ?>
<head>
	<title><?php echo $a['title']; ?></title>
    <?php 
        include("/links.php");
    ?>
    <link rel="stylesheet" type="text/css" href="css/ditemcss.css">
<body>

	<?php 
    	include("/header.php");
    ?>
  
    <main>
 	    <div class="container">
    		<div class="title"><h1><?php echo $a['title']; ?></h1></div>
    	</div>
    	<div class="container">
    		<div class="advantages">
    	        <div class="advantages_item">	
 	    		    <img src="img/<?php echo $a['img'];?>" width="360" height="360" alt="">
 	    		    <h3><?php echo $a['title']; ?></h3>
 	    		    <h4><?php echo $a['quality']; ?></h4>
 	    	    </div>
 	    	    <div class="advantages_item" id ="ai">	
 	    		    <table>
 	    		     	<tr><td class="lefttd"><h3>Armor: </h3></td><td class="righttd"><h3><?php echo $a['armor']; ?></h3></td></tr>
 	    		     	<tr><td class="lefttd"><h3>Bonus HP: </h3></td><td class="righttd"><h3><?php echo $a['hp']; ?></h3></td></tr>
 	    		     	<tr><td class="lefttd"><h3>durability: </h3></td><td class="righttd"><h3><?php echo $a['proch']; ?></h3></td></tr>
 	    		     	<tr><td class="lefttd"><h3>Passive: </h3></td><td class="righttd"><h3><?php echo $a['pass']; ?></h3></td></tr>
 	    		    </table> 	    		    
 	    	    </div>
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