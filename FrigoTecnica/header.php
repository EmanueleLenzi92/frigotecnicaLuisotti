<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Vendita, assistenza e montaggio frigoriferi e condizionatori Frigotecnica Luisotti">
		
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
	
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	
	<!-- Font awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	
	<!-- Animate scroll -->
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	

	
	<!-- my scripts -->
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/scrollTo.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/shrinkMenu.js"></script>      
	
	

	

	
	
	<?php wp_head();?>

</head>

<body>

	<!--Top Bar-->
	<section id="topbar" class="d-none d-lg-block">
		<div class="container clearfix">
		  <div class="contact-info float-left">
			<i class="far fa-envelope"></i> <a href="mailto:frigotecnicaluisotti@wmail.it">frigotecnicaluisotti@wmail.it</a>
			<i class="fa fa-phone"></i> +39 3408627269
		  </div>
		  
		  <div class="social-links float-right">
			<a href="https://it-it.facebook.com/FrigotecnicaLuisotti/" target="_blank" class="facebook"><i class="fab fa-facebook-f"></i></a> 
		  </div>
		
		</div>
	</section>

	
	<?php
	if (is_home()){
		$chisiamo= "#";
		$lavori= "#";
		$contatti= "#";
		$logo= "#";
	} else {
		$chisiamo= "https://www.frigotecnica-luisotti.it#about";
		$lavori= "https://www.frigotecnica-luisotti.it#portfolio";
		$contatti= "https://www.frigotecnica-luisotti.it#contatti";
		$logo= "https://www.frigotecnica-luisotti.it/";
	}
	?>
	
	
	<!--Menu-->
	<header id="header" class="sticky-top">
		<nav class="navbar navbar-expand-lg navbar-light navShadow">
		  <div class="container">
			<a class="navbar-brand" href="<?php echo $logo; ?>">
				  <img src="<?php bloginfo('template_directory'); ?>/img/_scuro-05.jpg" alt="logo" id="MenuLogo">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
			  <ul class="navbar-nav ml-auto">
				<li id="liChiSiamo" class="nav-item">
				  <a class="nav-link MenuChiSiamo" href="<?php echo $chisiamo; ?>" id="MenuChiSiamo">Chi siamo</a>
				</li>
				<li id="liLavori" class="nav-item">
				  <a class="nav-link MenuLavori" href="<?php echo $lavori; ?>" id="MenuLavori">I nostri lavori</a>
				</li>
				<li id="liContatti" class="nav-item">
				  <a class="nav-link MenuContatti" href="<?php echo $contatti; ?>" id="MenuContatti">Contattaci</a>
				</li>

			  </ul>
			</div>
		  </div>
		</nav>
	</header>	