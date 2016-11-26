<?php
	include("header.php")
?>

					<!-- Default snippet for navigation -->
					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a href="index.php">Home</a></li><!--Pagina principal-->
							<li class="menu-item"><a href="colima.php">Colima</a></li><!--Clima Colima-->
							<li class="menu-item"><a href="coquimatlan.php">Coquimatlan</a></li><!--Clima Coquimatlan-->
							<li class="menu-item"><a href="villa.php">Villa de Alvarez</a></li><!--Clima Villa de Alvarez-->
							<li class="menu-item current-menu-item"><a href="contact.php">Contact Us</a></li><!--Contactanos-->
							<?php
								if (!isset($_SESSION['nickname']))
								{
									echo "<li class='menu-item'><a href='login.php'>Login</a></li>";
								}
							?>
						</ul> <!-- .menu -->
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>

				</div>
			</div> <!-- .site-header -->

			<main class="main-content">
				<div class="container">
					<div class="breadcrumb">
						<a href="index.php">Home</a>
						<span>Contact</span>
					</div>
				</div>

				<div class="fullwidth-block">
					<div class="container">
						<div class="col-md-5">
							<div class="contact-details">
								<div class="map" data-latitude="19.2490904" data-longitude="-103.6973863"></div>
								<div class="contact-info">
									<address>
										<img src="images/icon-marker.png" alt="">
										<p>Digital Systems. <br>
										Avenida Universidad 333, Las Víboras, 28040 Colima, Col. </p>
									</address>
									
									<a href="#"><img src="images/icon-phone.png" alt="">+1 800 314 235</a>
									<a href="#"><img src="images/icon-envelope.png" alt="">tlaloc@gmail.com</a>
								</div>
							</div>
						</div>
						
						<div class="col-md-6 col-md-offset-1">
							<h2 class="section-title">Contact us</h2>
							<p>Digital Systems</p>
						<?php
							"<form action='mail.php' method='post' class='contact-form'>
								<div class='row'>
									<div class='col-md-6'><input type='text' placeholder='Your name...'' name='name'></div>
									<div class='col-md-6'><input type='text' placeholder='Email Addresss...'' name='email'></div>
								</div>
								<textarea name='' placeholder='Message...'' name='msj'></textarea>
								<div class='text-right'>
									<input type='submit' placeholder='Send message'>
								</div>
							</form>"
							?>




						</div>
					</div>
				</div>
				
			</main> <!-- .main-content -->

			<footer class="site-footer">
			<div class="container">

						<div class="social-links" style="margin: 0px auto;">
							<a href="https://www.facebook.com/" ><i class="fa fa-facebook" style="padding-top: 10px;"></i></a>
							<a href="https://twitter.com/"><i class="fa fa-twitter" style="padding-top: 10px;"></i></a>
							<a href="https://plus.google.com/"><i class="fa fa-google-plus" style="padding-top: 10px;"></i></a>
							<a href="https://es.pinterest.com/"><i class="fa fa-pinterest" style="padding-top: 10px;"></i></a>

				<p class="colophon2" style="text-align: center;">Copyright 2016 Universidad de Colima. Designed by Digital Systems. All rights reserved</p>
				<p class="colophon">with love... 5 B ♥</p>
			</div>
			</div>
		</footer> <!-- .site-footer -->
		
<form action="mail2.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>



		<script src="js/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDbuykDwQI1f_dhwNFm_O-OAOovsKW5huI&sensor=false"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>