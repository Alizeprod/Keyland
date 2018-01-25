<!DOCTYPE html>
<head>
	<title>Armor</title>
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
    			<h2>Armor</h2>
    		</div>
    	</div>
    	<div class="container">
    		<div class="advantages">
 	    		<?php 
 	    		    $armor = mysqli_query($link, "SELECT * FROM `armor` ORDER BY `quality` ");
 	    		    while($arm = mysqli_fetch_assoc($armor)) 
 	    		{
 	    		?>
 	    		<a href="/armoritem.php?id_armor=<?php echo $arm['id_armor']; ?>">
 	    		    <div class="advantages_item">	
 	    			    <img src="img/<?php echo $arm['img'];?>" width="200" height="200" alt="">
 	    			    <h3><?php echo $arm['title'];?></h3>
 	    			    <h4><?php echo $arm['quality'];?></h4>
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