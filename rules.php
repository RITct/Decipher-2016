<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Rules | Decipher2016</title>
	<link rel="icon" href="../images/icon.png" type="image/png" sizes="16x16">
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script src="js/mobile.js" type="text/javascript"></script>
</head>
<body>
	<div id="page">
		<div id="header">
			<div id="navigation">
				<span id="mobile-navigation">&nbsp;</span>
				<a href="index1.php" class="logo"><img src="images/logo.png" alt=""></a>
				<ul id="menu">
					<li class="selected">
						<a href="index.php">HOME</a>
					</li>
					<li>
						<a href="leader.php">LEADER BOARD</a>
					</li>
					<li>
						<a href="rules.php">RULES</a>
						
					</li>
					<li>
						<a href="https://www.facebook.com/decipher.ritu" target="_blank">WATSON</a>	
					</li>
					<?php
					session_start();
					if (isset($_SESSION["fbuid"]))
					echo "<li>
						<a href=\"logout.php\">logout</a>					
					</li>";
					?>
				</ul>
			</div>
		</div>
		<div id="body" class="runningsinglepost">
			<div>
			<h2>HAVE THESE IN YOUR MIND PALACE</h2>
			<p>THE GAME IS BETWEEN YOU AND ME ALONE</p>
			<p>USE YOUR FACEBOOK ACCOUNT TO LOGIN</p>
			<p>DONT POST ANSWERS OR ABUSIVE WORDS IN THE FORUM</p>
			<p>NOT THE PLACE TO SHOW OFF YOUR HACKING SKILLS</p>
			<p>SEND ME YOUR ANSWERS IN SMALL LETTERS WITHOUT SPACES AND SPECIAL CHARACTERS</p>
			<p>FIRST PLAYER WHO REACHES THE LEVEL 25 WILL BE THE WINNER</p>
			<p>YOU CAN ASK DOUBTS TO GOOGLE</p>
			<p>DONT MIND MY ASSISTANT DINKAN MORIARTY ON LEADER BOARD</p>
			<p>YOU KNOW I AM AWESOME AND MY DECISIONS ARE ALWAYS RIGHT</p>
			</div>
		</div>
		
	</div>
</body>
</html>