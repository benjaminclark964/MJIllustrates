<?php
	session_start();
?>
<html>
	<head>
		<link rel="shortcut icon" href="images/favicon1.ico" type="images/ico">
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="jquery-3.4.1.js"></script>
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
		
		
<script>
  function expand(imgs) {
    // Get the expanded image
    var expandImg = document.getElementById("expandedImg");
    // Get the image text
    var imgText = document.getElementById("imgtext");
    // Use the same src in the expanded image as the image being clicked on from the grid
    expandImg.src = imgs.src;
    // Use the value of the alt attribute of the clickable image as text inside the expanded image
    imgText.innerHTML = imgs.alt;
    // Show the container element (hidden with CSS)
    expandImg.parentElement.style.display = "block";
  }
</script>


		<div class="artImageRow1">
			<img src="images/rsz_coffee.jpg" alt="Coffee" onclick="expand(coffee)">
			<img id = "coffee" src="images/Coffee.jpg" alt="Coffee" style="display:none;">
			
			<img src ="images/rsz_redshirt.jpg" alt = "Red Shirt" onclick="expand(redshirt)">
			<img id = "redshirt" src="images/RedShirt.jpg" alt="RedShirt" style="display:none;">
			
			<img src="images/rsz_1sick.jpg" alt="Sick" onclick="expand(sick)">
			<img id = "sick" src="images/Sick.jpg" alt="Sick" style="display:none;">
			
			<img src ="images/rsz_conanwoman.jpg" alt = "Conan Woman" onclick="expand(conanwoman)">
			<img id = "conanwoman" src="images/ConanWoman.jpg" alt="ConanWoman" style="display:none;">
		</div>
		
		<div class="artImageRow2">
			<img src="images/rsz_1hawaii.jpg" alt="Hawaii" onclick="expand(hawaii)">
			<img id = "hawaii" src="images/Hawaii.jpg" alt="Coffee" style="display:none;">
			
			<img src="images/rsz_11princeprincess.jpg" alt="PrincePrincess" onclick="expand(princeprincess)">
			<img id = "princeprincess" src="images/PrincePrincess.jpg" alt="Coffee" style="display:none;">
			
			<img src ="images/rsz_reading.jpg" alt = "Reading" onclick="expand(reading)">
			<img id = "reading" src="images/Reading.jpg" alt="Coffee" style="display:none;">
			
			<img src="images/rsz_rihana.jpg" alt="Rihana" onclick="expand(rihana)">
			<img id = "rihana" src="images/Rihana.jpg" alt="Coffee" style="display:none;">	
		</div>
		
		<div class="container">
  <!-- Close the image -->
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>

  <!-- Expanded image -->
  <img id="expandedImg" style="width:100%;">

  <!-- Image text -->
  <div id="imgtext"></div>
</div>
	</body>
	
	<footer>
		<div class="foot">
			<li><a href="https://www.instagram.com/m.j.illustrates/?hl=en"> <img src="images/instaLogo.png" alt="Instagram Link"> </a></li> 
			<li>Email: simplymj.art@gmail.com</li>	
		</div>		
	</footer>
</html>