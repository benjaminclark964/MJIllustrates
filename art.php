<?php
  session_start();
?>
<html>
	<head>
		<link rel="shortcut icon" href="images/favicon1.ico" type="images/ico">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>MJIllustrates Art</title>
		
		<div class = "signedInMessage">
			<?php
			//checks if user is logged in or not
			if(isset($_SESSION['user'])){
				echo '<h1>Welcome!</h1>', $_SESSION['user'];
			}
			?>
		</div>
		
		<div class = "signinbutton">
			<?php
			if(isset($_SESSION['user'])){
				echo '<form method = "POST" action="logout_handler.php">
				<li><button type="submit" value="logout">Logout</button></li>
				</form>';
			} else {
				echo '<a href = "signIn.php">SIGN IN </a>';
			}
			?>
		</div>
		
		<img src ="images/Untitled_Artwork.png" alt= "MJIllustrates Logo" class="logo">
		
		<div class ="navbarArt">
			<a href="about.php">ABOUT</a>		
			<a href="index.php">HOME </a> 
			<a href="https://www.etsy.com/shop/MJIllustratesShop">STORE </a>
		</div>
	</head>
	
	<body>
		<div class = "box1"><div class = "paragraphs"><p> The products I use for my digital art are "Procreate", including my Ipad Air 1, with my Wacom Bamboo pen. I believe as a artist, yes 
		buying more high qualtiy items for art work helps just a little bit, but for the most part it relies on the quality of your technique and skill set in art. 
		I started off with Traditional Art, which included painting with acrylic, gouche, and other mediums. As a fellow artist, or just a friend, you may know 
		that I have a billion sketch books as well. None of them are finished to the last page.(haha) Please enjoy my selection of art I collaborated over the 
		years, from traditonal to digital!</p></div></div>
		
		<div class="artImage">
			<li><img src="images/Coffee.jpg" alt="Coffee"></li>
			<li><img src ="images/RedShirt.jpg" alt = "Red Shirt"></li>
			<li><img src="images/Sick.jpg" alt="Sick"></li>
			<li><img src="images/BillieEilish.jpg" alt="BillieEilish"></li>
			<li><img src ="images/ConanWoman.jpg" alt = "Conan Woman"></li>
			<li><img src="images/Hawaii.jpg" alt="Hawaii"></li>
			<li><img src="images/PrincePrincess.jpg" alt="PrincePrincess"></li>
			<li><img src ="images/Reading.jpg" alt = "Reading"></li>
			<li><img src="images/Rihana.jpg" alt="Rihana"></li>
		</div>
	</body>
	
	<footer>
		<div class="foot">
			<li><a href="https://www.instagram.com/m.j.illustrates/?hl=en"> <img src="images/instaLogo.png" alt="Instagram Link"> </a></li> 
			<li>Email: simplymj.art@gmail.com</li>	
		</div>		
	</footer>
</html>