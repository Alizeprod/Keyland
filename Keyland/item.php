<!DOCTYPE html>
    <?php
        include("/link.php");

        $item = mysqli_query($link, "SELECT * FROM `items` WHERE `id_item` = " . (int) $_GET['id_item']);
        $itm = mysqli_fetch_assoc($item);
        
    ?>
<head>
    
	<title><?php echo $itm['title']; ?></title>
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
    		<div class="title"><h1><?php echo $itm['title']; ?></h1></div>
    	</div>
    	<div class="container">
    		<div class="advantages">
    	        <div class="advantages_item">	
 	    		    <img src="img/<?php echo $itm['img'];?>" width="360" height="360" alt="">
 	    		    <h3><?php echo $itm['title']; ?></h3>
 	    		    <h4><?php echo $itm['quality']; ?></h4>
 	    	    </div>
 	    	    <div class="advantages_item" id ="ai">	
 	    		    <table>
 	    		     	<tr><td class="lefttd"><h3>Passive: </h3></td><td class="righttd"><h3><?php echo $itm['pass']; ?></h3></td></tr>
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