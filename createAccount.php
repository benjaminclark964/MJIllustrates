<?php
session_start();
?>
<html>
	<head>
		<link rel="shortcut icon" href="images/favicon1.ico" type="images/ico">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>MJIllustrates Create Account</title>
		
		<div class = "signedInMessage">
		<?php
			//checks if user is logged in or not
			if(isset($_SESSION['user'])){
				echo '<h1>Welcome!</h1>', $_SESSION['user'];
			}
		?>
		</div>
		
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
			<div class = "errormessage">
			<?php	  
				if(isset($_SESSION['empty'])){
					echo $_SESSION['empty'];
					echo "<br>";
				} 
				if(isset($_SESSION['firstname'])){
					echo $_SESSION['firstname'];
					echo "<br>";
				}
				if(isset($_SESSION['lastname'])){
					echo $_SESSION['lastname'];
					echo "<br>";
				}
				if(isset($_SESSION['email'])){
					echo $_SESSION['email'];
					echo "<br>";
				}
				if(isset($_SESSION['username'])){
					echo $_SESSION['username'];
					echo "<br>";
				}
				if(isset($_SESSION['password'])){
					echo $_SESSION['password'];
					echo "<br>";
				} 
				else if(isset($_SESSION['passmatch'])){
					echo $_SESSION['passmatch'];
					echo "<br>";
				}
				session_unset();	  
			?>
		</div>
		
		<form method = "POST" action ="createAccount_handler.php">
			<div class = "firstlastname">
			<p>First Name</p><li><input type="text" name="firstName" placeholder="firstname" value ="<?php if(isset($_GET['firstname'])) echo $_GET['firstname']; ?>"></li>
			<p>Last Name</p><li><input type="text" name="lastName" placeholder="lastname" value ="<?php if(isset($_GET['lastName'])) echo $_GET['lastName']; ?>"></li>
			<p>Email</p><li><input type="text" name="Email" placeholder="email@email.com" value ="<?php if(isset($_GET['Email'])) echo $_GET['Email']; ?>"></li>
			<p>New Username</p><li><input type="text" name="userid" placeholder="new username" value ="<?php if(isset($_GET['userid'])) echo $_GET['userid']; ?>"></li>
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