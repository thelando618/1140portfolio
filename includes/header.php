<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Landon Zirkelbach - Metro St. Louis Area Web Development - <?php echo $activeState; ?></title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- 1140px Grid styles for IE -->
	<!--[if lte IE 9]><link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" /><![endif]-->

	<!-- CSS Reset from Starkers theme -->
	<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen" />
	
	<!-- The 1140px Grid - http://cssgrid.net/ -->
	<link rel="stylesheet" href="css/1140.css" type="text/css" media="screen" />
	
	<!-- Your styles -->
	<link rel="stylesheet" href="webfonts/stylesheet.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" />
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<script src="js/libs/modernizr-2.0.6.min.js"></script>
	<!--css3-mediaqueries-js - http://code.google.com/p/css3-mediaqueries-js/ - Enables media queries in some unsupported browsers-->
	<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.8.23.custom.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

</head>
<body>
	
<div class="container nav-container">
	<div class="row">
		<div class="eightcol">
			<h1 id="title"><a href="index.php">LandonZirkelbach.com</a></h1>
		</div>
		<div class="fourcol last">
			<nav>
				<ul>
					<li class="<?php if($activeState == 'Home') { echo 'active'; } ?>"><a href="index.php">Home</a></li>
					<li class="<?php if($activeState == 'Portfolio') { echo 'active'; } ?>"><a href="portfolio.php">Portfolio</a></li>
					<li><a href="files/Landon_Zirkelbach_Resume.doc">Resume</a></li>				
				</ul>
			</nav>	
		</div>
		
	</div>
</div>
