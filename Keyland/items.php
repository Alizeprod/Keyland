<!DOCTYPE html>
<head>
	<title>Items</title>
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
    			<h2>Items</h2>
    		</div>
    	</div>
    	<div class="container">
    		<div class="advantages">
 	    		<?php 
 	    		    $items = mysqli_query($link, "SELECT * FROM `items` ");
 	    		    while ($itms = mysqli_fetch_assoc($items))
                    {
 	    		?>
 	    		<a href="/item.php?id_item=<?php echo $itms['id_item']; ?>">
 	    		    <div class="advantages_item">	
 	    			    <img src="img/<?php echo $itms['img'];?>" width="200" height="200" alt="">
 	    			    <h3><?php echo $itms['title'];?></h3>
 	    			    <h4><?php echo $itms['Quality'];?></h4>
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