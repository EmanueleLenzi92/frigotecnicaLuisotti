<?php
	if (is_home()){
		$chisiamo= "#";
		$lavori= "#";
		$contatti= "#";

	} else {
		$chisiamo= "https://www.frigotecnica-luisotti.it#about";
		$lavori= "https://www.frigotecnica-luisotti.it#portfolio";
		$contatti= "https://www.frigotecnica-luisotti.it#contatti";

	}
	?>

<section id="sectionfooter">

	<div class="container">

		<footer class="footer-distributed">

				<div class="footer-left">

					<h3><span style="text-decoration:underline"><span style="color:#4db8ff;"><!--#6CD2EC;-->Frigo</span><span style="color:#ff3333;">Tecnica</span></span><br>Luisotti</h3>

					<p class="footer-links">
						<a href="<?php echo $chisiamo; ?>" class="MenuChiSiamo">Chi siamo</a>
						·
						<a href="<?php echo $lavori; ?>" class="MenuLavori">I nostri lavori</a>
						·
						<a href="<?php echo $contatti; ?>" class="MenuContatti">Contattaci</a>
					</p>

					<p class="footer-company-name">FrigoTecnica Luisotti &copy; 2019</p>
				</div>

				<div class="footer-center">

					<div>
						<i class="fa fa-map-marker"></i>
						<p><span>Via della Gronda, 369, Viareggio (LU)</span>lavori in Toscana e Liguria</p>
					</div>

					<div>
						<i class="fa fa-phone"></i>
						<p><a href="tel:+393408627269" id="phoneFooter">+39 3408627269</a></p>
					</div>

					<div>
						<i class="fa fa-envelope"></i>
						<p><a href="mailto:frigotecnicaluisotti@wmail.it">frigotecnicaluisotti@wmail.it</a></p>
					</div>

				</div>

				<div class="footer-right">

					<p class="footer-company-about">
						<span>Informazioni</span>
						9 anni di esperienza: assistenza, montaggio e vendite di frigoreferi e condizionatori industriali e climatizzazione residenziale. </br> </br> P. IVA 02474220460
					</p>

					<div class="footer-icons">

						<a href="https://it-it.facebook.com/FrigotecnicaLuisotti/" target="_blank"><i class="fab fa-facebook-f"></i></a>
					
					</div>

				</div>

		</footer>

	</div>
	
</section>
	
	
	
	
	
	
	<!-- Call to animate scroll script-->
	<script>
		
			AOS.init({
				disable: 'phone', // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
				delay: 0, // values from 0 to 3000, with step 50ms
				duration: 700, // values from 0 to 3000, with step 50ms
				easing: 'ease', // default easing for AOS animations
				once: true, // whether animation should happen only once - while scrolling down
			});
		
	</script>
	
	<!-- Privacy -->
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/nibirumail.cookie.min.js"></script>

</body>
</html>