<!DOCTYPE html>
    <?php
        include("/link.php");

        $weap = mysqli_query($link, "SELECT * FROM `weapons` WHERE `id_weapon` = " . (int) $_GET['id_weapon']);
        
        $we = mysqli_fetch_assoc($weap);
        ?>
<head>
	<title><?php echo $we['title']; ?></title>
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
    		<div class="title"><h1><?php echo $we['title']; ?></h1></div>
    	</div>
    	<div class="container">
    		<div class="advantages">
    	        <div class="advantages_item">	
 	    		    <img src="img/<?php echo $we['img'];?>" width="360" height="360" alt="">
 	    		    <h3><?php echo $we['title']; ?></h3>
 	    		    <h4><?php echo $we['quality']; ?></h4>
 	    	    </div>
 	    	    <div class="advantages_item" id ="ai">	
 	    		    <table>
 	    		     	<tr><td class="lefttd"><h3>Damage: </h3></td><td class="righttd"><h3><?php echo $we['dmg']; ?></h3></td></tr>
 	    		     	<tr><td class="lefttd"><h3>Attack speed: </h3></td><td class="righttd"><h3><?php echo $we['speed']; ?></h3></td></tr>
 	    		     	<tr><td class="lefttd"><h3>crit chance: </h3></td><td class="righttd"><h3><?php echo $we['crit']; ?>%</h3></td></tr>
 	    		     	<tr><td class="lefttd"><h3>durability: </h3></td><td class="righttd"><h3><?php echo $we['proch']; ?></h3></td></tr>
 	    		     	<tr><td class="lefttd"><h3>Passive: </h3></td><td class="righttd"><h3><?php echo $we['pass']; ?></h3></td></tr>
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