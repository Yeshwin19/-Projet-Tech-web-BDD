<?php
	// on se connecte à notre base
	$bdd = new PDO("mysql:host=localhost;dbname=site;charset=utf8", "root", "");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>YRB |Portfolio</title>
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<link href="https://fonts.googleapis.com/css?family=Dokdo" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	
	<link rel="stylesheet"  href="mains.css">
</head>
<body>

	<header>
		<div class="menu-toggler">
			<div class="bar half start"></div>
			<div class="bar"></div>
			<div class="bar half end"></div>
			
		</div>
		<nav class="top-nav">
			<ul class="nav-list">
				<li>
					<a href="index.html" class="nav-link">Home</a>
				</li>
				<li>
					<a href="#about" class="nav-link">About</a>
				</li>
				<li>
					<a href="#compétences" class="nav-link">Compétences</a>
				</li>
				<li>
					<a href="#services" class="nav-link">Services</a>
				</li>
				<li>
					<a href="#portfolio" class="nav-link">Portfolio</a>
				</li>
				<li>
					<a href="#experience" class="nav-link">Experience</a>
				</li>
				<li>
					<a href="#contact" class="nav-link">Contact</a>
				</li>

				<li>
					<a href="My CV.pdf" class="nav-link">CV</a>
				</li>
			</ul>
		</nav>
		<div class="landing-text">
			<h1>Bangarigadu Yeshwin Raj</h1>
			<h6>Student | Web Developer</h6>
		</div>
		
	</header>

	<section class="about" id="about">
		<div class="container">
			<div class="profile-img" data-aos="fade-right">
				<img src="imagess/yeshwin.jpg" alt="" style="width: 90%; height: 80%;">
			</div>
			<div class="about-details">
				<div class="about-heading" data-aos="fade-left">
					<h1>About</h1>
					<h6>Myself</h6>
				</div>
				<p data-aos="fade-left">

				<!--selectionne et affiche les données depuis la BDD-->
		  		  <?php 
		  		  	$aboutme = $bdd->prepare('SELECT * FROM aboutme');
		  		  	$aboutme->execute();
		  		  	$text  = $aboutme->fetch();
		  		  	echo $text['text'];
		  		  ?>

		  		</p>
			  		<div class="social-media">
				<ul class="nav-list" data-aos="fade-left">
					<li>
						<a href="https://www.facebook.com/people/Yeshwin-Bangarigadu/100014413598815?hc_ref=ARRW3nRGlhc6ShgSot_0VYpxolU15lpDjpDW5dLXZOmz2ZWx2D8KQmiESTWioM12KFU&fref=nf" class="icon-link" >
							<i class="fab fa-facebook-square"></i>
						</a>
					</li>
					<li>
						<a href="https://fr.linkedin.com/in/yeshwin-raj-bangarigadu-630106170" class="icon-link">
							<i class="fab fa-linkedin"></i>
						</a>
					</li>
					<li>
						<a href="https://www.youtube.com/channel/UCT3wfDOSQ7aiIUSXoCmcmNA" class="icon-link">
							<i class="fab fa-youtube"></i>
						</a>
					</li>
					
				</ul>
				
			</div>

			</div>
			
		</div>
	</section>

	<section class="compétences" id="compétences">
		<div class="container">
			<div class="box" data-aos="fade-right">
				
			</div>
				<div class="about-heading" data-aos="fade-left">
					<h1>Compétences</h1>

				</div>

				<div class="chart" data-percent="93" data-aos="fade-right">93%<p class="p">HTML</p></div>

				<div class="chart"data-percent="90" data-aos="fade-up"> 90%<p class="p">CSS</p></div>

				<div class="chart" data-percent="85" data-aos="fade-down">85%<p class="p">JAVASCRIPT</p></div>

				<div class="chart" data-percent="80" data-aos="fade-up">80%<p class="p">JQUERY</p></div>

				<div class="chart" data-percent="70" data-aos="fade-down">70%<p class="p">BOOTSTRAP</p></div>

				<div class="chart" data-percent="70" data-aos="fade-up">60%<p class="p">PHP</p></div>


			</div>
			
		</div>
	</section>
   
	

	<section class="services" id="services">
		<div class="container">
			<div class="section-heading" data-aos="fade-in">
				<h1>Services</h1>
				<h6>What can I do for you?</h6>
			
				
			</div>
			<div class="my-skills">
				<div class="skill" data-aos="fade-in">
					<div class="icon-container">
						<i class="fas fa-layer-group"></i>
					</div>

					<h1>Web Design</h1>


					<!--selectionne et affiche les données depuis la BDD-->
					<?php 
		  		  	$services = $bdd->prepare('SELECT * FROM services');
		  		  	$services->execute();
		  		  	$service  = $services->fetch();
		  		  	echo '<p>'.$service['text'].'</p>';
		  		  ?>

				</div>
				<div class="skill" data-aos="fade-in">
					<div class="icon-container">
						<i class="fas fa-code"></i>
					</div>
					<h1>Web Development</h1>
					

					<!--selectionne et affiche les données depuis la BDD-->
					<?php 
		  		  	$services = $bdd->prepare('SELECT * FROM services');
		  		  	$services->execute();
		  		  	$service  = $services->fetch();
		  		  	echo '<p>'.$service['webservice'].'</p>';
		  		  ?>
					
				</div>
				<div class="skill" data-aos="fade-in">
					<div class="icon-container">
						<i class="far fa-chart-bar"></i>
					</div>
					<h1>Product Strategy</h1>

					<!--selectionne et affiche les données depuis la BDD-->
					<?php 
		  		  	$services = $bdd->prepare('SELECT * FROM services');
		  		  	$services->execute();
		  		  	$service  = $services->fetch();
		  		  	echo '<p>'.$service['webdesign'].'</p>';

		  		  ?>
				</div>
			</div>
			
		</div>
		
	</section>

	<section class="portfolio" id="portfolio">
		<div class="container">
			<div class="section-heading">
				<h1>Portfolio</h1>
				<h6>View some of my recent work</h6>
			</div>
			<div class="portfolio-item">
				<div class="portfolio-img has-margin-right" data-aos="fade-right">
					<img src="imagess/web.png" alt="">
				</div>
				<div class="portfolio-description" data-aos="fade-left">
					<h6>Web Development</h6>
					<h1>Website</h1>


					<!--selectionne et affiche les données depuis la BDD-->
					<?php 
			  		  	$portfolio = $bdd->prepare('SELECT * FROM portfolio');
			  		  	$portfolio->execute();
			  		  	$portfolios  = $portfolio->fetch();
			  		  	echo '<p>'.$portfolios['text'].'</p>';
		  		    ?>

				</div>
			</div>
			<div class="portfolio-item">
				<div class="portfolio-description" data-aos="fade-right">
					<h6>Web Design</h6>
					<h1>Product Layout</h1>


					<!--selectionne et affiche les données depuis la BDD-->
					<?php 
			  		  	$portfolio = $bdd->prepare('SELECT * FROM portfolio');
			  		  	$portfolio->execute();
			  		  	$portfolios  = $portfolio->fetch();
			  		  	echo '<p>'.$portfolios['web'].'<p>';
		  		    ?>
					
				</div>
				<div class="portfolio-img has-margin-right">
					<img src="imagess/prod.png" alt="" data-aos="fade-left">
				</div>
				
			</div>
			<div class="portfolio-item">
				<div class="portfolio-img has-margin-right">
					<img src="imagess/pgd.png" alt="" data-aos="fade-right" style="width: 450px; height: 400px;">
				</div>
				<div class="portfolio-description" data-aos="fade-left">
					<h6>Web Design</h6>
					<h1>Product Sketch</h1>


					<!--selectionne et affiche les données depuis la BDD-->
					<?php 
			  		  	$portfolio = $bdd->prepare('SELECT * FROM portfolio');
			  		  	$portfolio->execute();
			  		  	$portfolios  = $portfolio->fetch();
			  		  	echo '<p>'.$portfolios['design'].'</p>';
		  		    ?>
					
				</div>
			</div>
		</div>
	</section>

	<section class="experience" id="experience">
		<div class="container">
			<div class="section-heading">
				<h1>Work Experience</h1>
				<h6>Past and current jobs</h6>
			</div>
			<div class="timeline" data-aos="fade-down">
				<ul>
					<li class="date" data-date='2017 - 2018'>
						<h1>Ezitrac</h1>


					<!--selectionne et affiche les données depuis la BDD-->
					<?php 
			  		  	$experience = $bdd->prepare('SELECT * FROM experience');
			  		  	$experience->execute();
			  		  	$experiences  = $experience->fetch();
			  		  	echo '<p>'.$experiences['text'].'</p>';
		  		    ?>

					</li>
					<li class="date" data-date='2016 - 2017'>
						<h1>PCol Ltd</h1>


					<!--selectionne et affiche les données depuis la BDD-->
					<?php 
			  		  	$experience = $bdd->prepare('SELECT * FROM experience');
			  		  	$experience->execute();
			  		  	$experiences  = $experience->fetch();
			  		  	echo '<p>'.$experiences['exp'].'</p>';
		  		    ?>

					</li>
					<li class="date" data-date='2015 - 2016'>
						<h1>Secupro</h1>


					<!--selectionne et affiche les données depuis la BDD-->
					<?php 
			  		  	$experience = $bdd->prepare('SELECT * FROM experience');
			  		  	$experience->execute();
			  		  	$experiences  = $experience->fetch();
			  		  	echo '<p>'.$experiences['erience'].'</p>';
		  		    ?>

					</li>
					
				</ul>
				
			</div>
		</div>
	</section>

	<section class="contact" id="contact">
		<div class="container">
			<div class="section-heading">

				<!--En cliquant sur le bouton 'Submit_contact', il va selectioner tout les elements de name, email et subject_message et va l'inserer dans la BDD et ensuit l'afficher sur la page admin-->
				<?php

				if (isset($_POST['Submit_contact'])) {
					$name = $_POST['name'];
					$email = $_POST['email'];
					$message = $_POST['subject_message'];
					

					$text_bdd = $bdd->prepare('INSERT INTO contact(name, email, subject) VALUES(?,?,?)');
					$text_bdd->execute(array($name, $email, $message));
				}

				?>
				<h1>Contact</h1>
				<h6>Feel free to contact me</h6>
			</div>
			<form method="POST" data-aos="fade-down">
				<label for="name">Name:</label>
				<input type="text" id="name" name="name" placeholder="Enter your name..." required>
				<label for="email">Email:</label>
				<input type="text" id="email" name="email" placeholder="Enter your Email..." required>
				
				<label for="subject">Subject:</label>
			
				<textarea name="subject_message" id="subject" cols="10" rows="10">

				</textarea>
				<br>
				<input type="submit" name="Submit_contact" data-aos="fade-right">
			</form>
		</div>
	</section>

	<footer class="copyright">
		<div class="up" id="up" >
			<i class="fas fa-chevron-up"></i>
		</div>
		<p>&copy; 2019 <a href="login.php">Bangarigadu Yeshwin Raj</a></p>
	</footer>		

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/jquery.easypiechart.min.js"></script>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>*
	<script src="js/mains.js"></script>

</body>
</html>