<?php 
$activeState = 'Home';
include 'includes/header.php'; 
?>
<div class="red-container home-container container">
	<div class="row">
		<div class="ninecol">
			<h1 class="intro">My name is <strong>Landon Zirkelbach</strong> and I am a <strong>Front-End Developer</strong> consistently looking for the next challenge.</h1>
			<p class="intro-text">I stay up to date on emerging techniques and look to implement each one as necessary into the project I work with. I specialize in <strong>HTML, 
				CSS, and jQuery</strong>. I have created websites from scratch but also worked with different frameworks and systems. Some technologies I have worked 
				with include <strong>Wordpress, Drupal, CodeIgniter, HTML5 Boilerplate, and Twitter Bootstrap</strong>. I have built mobile web sites, and even created 
				responsive web sites that adjust for which ever device you are using to view a site. This website was built to be responsive. 
				Try resizing the window to see it in action!
			</p>
		</div>
		<div class="threecol get-in-touch last">
			<p class="center"><img src="images/get-in-touch-icon.png" alt="Speech bubble" title="speech bubble" target="_blank"/></p>
			<h2>Get In Touch</h2>
			<div class="icons">
				<a href="http://twitter.com/thelando618" class="twitter icon" target="_blank"><img src="images/twitter.png" /></a>
				<a href="http://www.linkedin.com/pub/landon-zirkelbach/18/869/682" class="linked icon" target="_blank"><img src="images/linked.png" /></a>
				<a href="mailto:landonzirkelbach@gmail.com" class="email icon" target="_blank"><img src="images/mail.png" /></a>
			</div>
		</div>
	</div>
</div>
<div class="home-portfolio container">
	<div class="row">
		<div class="fourcol">
			<div class="home-portfolio-item">
				<a href="portfolio.php"><img src="images/home-aisle.jpg" /></a>	
			</div>
		</div>
		<div class="fourcol">
			<div class="home-portfolio-item">
				<a href="portfolio.php"><img src="images/home-jli.jpg" /></a>	
			</div>
		</div>
		<div class="fourcol last">
			<div class="home-portfolio-item">
				<a href="portfolio.php"><img src="images/home-morrissey.jpg" /></a>	
			</div>
		</div>				
	</div>
</div>
	

<?php include 'includes/footer.php'; ?>