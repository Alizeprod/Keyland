<!DOCTYPE html>
<head>
	<title>Weapons</title>
    <?php 
    	include("/links.php");
    ?>
    <link rel="stylesheet" type="text/css" href="css/manyitems.css">
</head>
<body>
	<?php 
    	include("/link.php");
	?>
	<?php 
    	include("/header.php");
    ?>
    <main>
    	<div class="container">
    		<div class="title">
    			<h2>Weapons</h2>
    		</div>
    	</div>
    	<div class="container">
    		<div class="advantages">
 	    		<?php 
 	    		    $weapons = mysqli_query($link, "SELECT * FROM `weapons` ORDER BY `reit` DESC");
 	    		?>
 	    		<?php 
 	    		while ( $w = mysqli_fetch_assoc($weapons)) 
 	    		{
 	    		?>
 	    		<a href="/ditempage.php?id_weapon=<?php echo $w['id_weapon']; ?>">
 	    		    <div class="advantages_item">	
 	    			    <img src="img/<?php echo $w['img'];?>" width="200" height="200" alt="">
 	    			    <h3><?php echo $w['title'];?></h3>
 	    			    <h4><?php echo $w['quality'];?></h4>
 	    			</div>
 	    		</a>
 	    		<?php } ?>
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