<!DOCTYPE html>
    <?php
        include("/link.php");

        $enmy = mysqli_query($link, "SELECT * FROM `enemies` WHERE `id_enemy` = " . (int) $_GET['id_enemy']);
        $e = mysqli_fetch_assoc($enmy);
        
    ?>
<head>
	<title><?php echo $e['title']; ?></title>
    <?php 
        include("/links.php");
    ?>
    <link rel="stylesheet" type="text/css" href="css/ditemcss.css">
</head>
<body>

	<?php 
    	include("/header.php");
    ?>
  
    <main>
 	    <div class="container">
    		<div class="title"><h1><?php echo $e['title']; ?></h1></div>
    	</div>
    	<div class="container">
    		<div class="advantages">
    	        <div class="advantages_item">	
 	    		    <img src="img/<?php echo $e['img'];?>" width="360" height="360" alt="">
 	    		    <h3><?php echo $e['title']; ?></h3>
 	    		    <h4><?php echo $e['quality']; ?></h4>
 	    	    </div>
 	    	    <div class="advantages_item" id ="ai">	
 	    		    <table>
 	    		     	<tr><td class="lefttd"><h3>Damage: </h3></td><td class="righttd"><h3><?php echo $e['dmg']; ?></h3></td></tr>
 	    		     	<tr><td class="lefttd"><h3>Bonus HP: </h3></td><td class="righttd"><h3><?php echo $e['hp']; ?></h3></td></tr>
 	    		     	<tr><td class="lefttd"><h3>Spawn: </h3></td><td class="righttd"><h3><?php echo $e['spawn']; ?></h3></td></tr>
 	    		     	<tr><td class="lefttd"><h3>Passive: </h3></td><td class="righttd"><h3><?php echo $e['pass']; ?></h3></td></tr>
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