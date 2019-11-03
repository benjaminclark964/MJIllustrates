<?php
	session_start();
?>
<html>
	<head>
		<link rel="shortcut icon" href="images/favicon1.ico" type="images/ico">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>MJIllustrates Sign in</title>
		
		<div class = "signedInMessage">
		<?php
			//checks if user is logged in or not
			if(isset($_SESSION['user'])){
				echo '<h1>Welcome!</h1>', $_SESSION['user'];
			}
		?>
		</div>
		
		<img src ="images/Untitled_Artwork.png" alt= "MJIllustrates Logo" class = "logo">
		
		<div class="signinnavbar">
			<a href="index.php">HOME </a>
			<a href="about.php">ABOUT</a>	
			<a href="art.php">ART </a>	
			<a href="https://www.etsy.com/shop/MJIllustratesShop">STORE </a>
		</div>
	</head>
	
	<body>
		<div class="errormessage">
		<?php
			if(isset($_SESSION['error'])){
				echo $_SESSION['error'];
			}
			session_unset();
		?>
		</div>
		<form method = "POST" action="login_handler.php">
			<div class="firstlastname">
			<p>Username</p><li><input type="text" name="username" placeholder="username or email"></li>
			<p>Password</p><li><input type="password" name="password" placeholder="password"></li>
			<li><button type="submit" value="sign-in">Sign in</button></li>
			<li><a href = "createAccount.php">CREATE NEW ACCOUNT</a></li>
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