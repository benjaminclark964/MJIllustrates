<?php
  session_start();
?>
<html>
	<head>
		<link rel="shortcut icon" href="images/favicon1.ico" type="images/ico">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>MJIllustrates Sign in</title>
		<img src ="images/Untitled_Artwork.png" alt= "MJIllustrates Logo" class = "logo">
		<div class="signinnavbar">
			<a href="index.php">HOME </a>
			<a href="about.php">ABOUT</a>	
			<a href="art.php">ART </a>	
			<a href="https://www.etsy.com/shop/MJIllustratesShop">STORE </a>
		</div>
	</head>
	
	<body>
	
		<form method = "POST" action="login_handler.php">
			<div class="firstlastname">
			<p>Username</p><li><input type="text" name="username" placeholder="Enter Username"></li>
			<p>Password</p><li><input type="password" name="password" placeholder="Enter Password"></li>
			<li><button type="submit" value="sign-in">Sign in</button></li>
			<li><a href = "createAccount.php">CREATE NEW ACCOUNT</a></li>
			</div>
		</form>
		
		<form method = "POST" action="logout_handler.php">
			<div class="firstlastname">
			<li><button type="submit" value="logout">Logout</button></li>
			</div>
		</form>
	</body>

	<footer>
	<div class="foot">
		<li><a href="https://www.instagram.com/m.j.illustrates/?hl=en"> <img src="images/instaLogo.png" alt="Instagram Link"> </a></li>
		<li>Email: simplymj.art@gmail.com</li>
	</div>		
	</footer>

</html>