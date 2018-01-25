<!DOCTYPE html>
<head>
	<title>Enemies</title>
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
    			<h2>Enemies</h2>
    		</div>
    	</div>
    	<div class="container">
    		<div class="advantages">
 	    		<?php 
 	    		    $enemies = mysqli_query($link, "SELECT * FROM `enemies` ");
                    if($enemies == false)
                    {
                        echo 'error';
                    }
 	    		    while ($enm = mysqli_fetch_assoc($enemies))
                    {
 	    		?>
 	    		<a href="/enemy.php?id_enemy=<?php echo $enm['id_enemy']; ?>">
 	    		    <div class="advantages_item">	
 	    			    <img src="img/<?php echo $enm['img'];?>" width="200" height="200" alt="">
 	    			    <h3><?php echo $enm['title'];?></h3>
 	    			    <h4><?php echo $enm['Quality'];?></h4>
 	    			</div>
 	    		</a>
                <?php
                }
                ?>
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