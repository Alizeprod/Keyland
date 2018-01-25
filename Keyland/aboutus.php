<!DOCTYPE html>
    <?php
        include("/link.php");

        $ar = mysqli_query($link, "SELECT * FROM `armor` WHERE `id_armor` = " . (int) $_GET['id_armor']);
        
        $a = mysqli_fetch_assoc($ar);
    ?>
<head>
	<title>About us</title>
    <?php 
        include("/links.php");
    ?>
    <link rel="stylesheet" type="text/css" href="css/about_us.css">
<body>

	<?php 
    	include("/header.php");
    ?>
  
    <main>
 	    <div class="container">
    		<div class="title"><h1>About us</h1></div>
    	</div>
 	    <div class="container">
 		    <div class="aboutg">
 	    		<p>We are glad to welcome you on our website. Here you can find information about the Keyland. Keyland is the 2D MMO RPG. There are a lot of bosse, weapons, armor, dungeons and another. Our designer known as Mifysta will do her best to make this game look realy good and our programmer known as Alize will try to make game work as good as he can. We hope you will enjoy the game.</p>
 	    	</div>
 	    </div>
        <div class="container">
            <div class="ico-container">
                <ul>
                <li class="ico"><a href="https://vk.com/alize_prod" ><i class="fa fa-vk" style="font-size:20px;color:black;margin-right: 10px"></i>@Alize_prod</a></li>
                <li class="ico"><a href="https://www.facebook.com/alize.queen.92" ><i class="fa fa-facebook" style="font-size:20px;color:black;margin-right: 18px"></i>@Alize_prod</a></li>
                <li class="ico"><a href="https://twitter.com/Alize_prod" ><i class="fa fa-twitter" style="font-size:20px;color:black;margin-right: 10px"></i>@Alize_prod</a></li>  
            </ul>
            </div>
        </div>
    </main>


	<script type="text/javascript" src="js/jquery-3.2.1.min.js" ></script>
 	<script type="text/javascript" src="js/script.js" ></script>
</body>
</html>