<!DOCTYPE html>
<head>
	<title>Help</title>
	<?php 
        include("/links.php");
    ?>
    <link rel="stylesheet" type="text/css" href="css/help.css">
</head>
<body>
	<?php 
    	include("/header.php");
    ?>

    <main>
    	<div class="container">
    		<div class="title"><h3>You can leave your complaints and recommendations below.</h3></div>
    	</div>
    	<div class="container">
    		<div class="name_form"><h3>Submission form:</h3></div>
    	</div>
    	<div class="container">
    		<div class="formcon">
    		<form action="send.php" id ="form">
    			<ul class="formul">
    				<li><input class = "obich" type="text" name="fn" placeholder="Enter your full name" required /></li>
    			    <li><input class = "obich" type="text" name="email" placeholder="Enter your e-mail" required /></li>
    			    <li><input class = "specin" type="text" name="text" placeholder="Enter your message" required /></li>
    			    <li><button class="send" >send</button></li>
    			</ul>
    		 </form>
    		 </div>
    	</div>
    </main>

    <?php
     	include("/footer.php");
    ?>	


    <script type="text/javascript" src="js/jquery-3.2.1.min.js" ></script>
 	<script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
</body>
</html>