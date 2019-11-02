<?php 
  session_start();
 ?>
<html>
	<head>
		<link rel="shortcut icon" href="images/favicon1.ico" type="images/ico">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>MJIllustrates About</title>
		
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
		
		<img src ="images/Untitled_Artwork.png" alt= "MJIllustrates Logo" class = "logo">
		
		<div class = "navbarAbout">
			<a href="index.php">HOME </a>
			<a href="art.php">ART </a>
			<a href="https://www.etsy.com/shop/MJIllustratesShop">STORE </a>
		</div>
	</head>
	
	<body>
		<div class = "box1"><div class = "paragraphs"><p> Hey, call me MJ. I am an artist based in Boise, Idaho. I am a partime illustrator and a traditonal artist. I began my art journey
		at a very young age of 10. I went to a traditional art private school for for firt two years of my high school career, but for the most part, I am 
		self-taught. I began to create "happy years;" as a reflection of my own story, and the story of others who were willing to share through the beautiful 
		characters developed on each page. "happy years;" is a heart felt, warming series, including the subjects of mental health, social health and justice. 
		With a little bit of action of course, because who doesnt love action packed scenes. My art is my own personal taste of simple, gentle aesthics to the 
		vibrance that the world has had to offer to me. I hope you enjoy my art, and you can find solstice and the same gentleness that I create with each stroke 
		of my pens or brushes.</p></div></div>
		
		<div class = aboutpic><img src="images/GirlEatingBread.jpg" alt="Girl Eating Bread"></div>
	<body/>
		
	<footer>
		<div class="foot">
			<li><a href="https://www.instagram.com/m.j.illustrates/?hl=en"> <img src="images/instaLogo.png" alt="Instagram Link"> </a></li>
			<li>Email: simplymj.art@gmail.com</li> 
		</div>
	</footer>
</html>