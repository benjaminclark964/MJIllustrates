<?php
session_start();
?>
<html>
	<head>
		<link rel="shortcut icon" href="images/favicon1.ico" type="images/ico">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>MJIllustrates Create Account</title>
		<div class = "signinbutton">
			<a href = "signIn.php">SIGN IN </a>
		</div>
		<img src ="images/Untitled_Artwork.png" alt= "MJIllustrates Logo" class="logo">
		<div class="signinnavbar">
			<a href="index.php">HOME </a>
			<a href="about.php">ABOUT</a>	
			<a href="art.php">ART </a> 	
			<a href="https://www.etsy.com/shop/MJIllustratesShop">STORE </a>
		</div>
	</head>
	
	<body>
	<div>
	    <?php
		  if(isset($_GET['error'])){
		    if($_GET['error'] == "emptyfields"){
				echo "Fill in all fields!";
			} else if($_GET['error'] == "invalidfirstname"){
				echo "Invalid first name";
			} else if($_GET['error'] == "invalidlastname"){
				echo "Invalid last name";
			} else if($_GET['error'] == "invalidemail"){
				echo "Invalid email";
			} else if($_GET['error'] == "invalidusername"){
				echo "Invalid username";
			} else if($_GET['error'] == "invalidpassword"){
				echo "Invalid password";
			}
		  }
		?>
		<form method = "POST" action ="createAccount_handler.php">
			<div class = "firstlastname">
			<p>First Name</p><li><input type="text" name="firstName" placeholder="firstname"></li>
			<p>Last Name</p><li><input type="text" name="lastName" placeholder="lastname"></li>
			<p>Email</p><li><input type="text" name="Email" placeholder="email@email.com"></li>
			<p>New Username</p><li><input type="text" name="userid" placeholder="new username"></li>
			<p>Password</p><li><input type="password" name="passWord" placeholder="password"></li>
			<p>Re-enter Password</p><li><input type="password" name="re-enter-password" placeholder="re-enter password"></li>
			<li><button type="submit" value="save-submit">Create Account</button></li>
			</div>
		</form>
	</div>
	</body>

	<footer>
	<div class="foot">
		<li><a href="https://www.instagram.com/m.j.illustrates/?hl=en"> <img src="images/instaLogo.png" alt="Instagram Link"> </a></li>
		<li>Email: simplymj.art@gmail.com</li>
	</div>
	</footer>

</html>