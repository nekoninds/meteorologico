<?php
	include("header.php");
	include('temperaturaColimaGrafica.php');
	include('HumedadColimaGrafica.php');
	include('LuminocidadColimaGrafica.php');

?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#tabs" ).tabs();
  } );
  </script>

					<!-- Default snippet for navigation -->
					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a href="index.php">Home</a></li><!--Pagina principal-->
							<li class="menu-item current-menu-item"><a href="colima.php">Colima</a></li><!--Clima Colima-->
							<li class="menu-item"><a href="coquimatlan.php">Coquimatlan</a></li><!--Clima Coquimatlan-->
							<li class="menu-item"><a href="villa.php">Villa de Alvarez</a></li><!--Clima Villa de Alvarez-->
							<li class="menu-item"><a href="contact.php">Contact Us</a></li><!--Contactanos-->
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

			

				</div>
			</div> <!-- .site-header -->

			<main class="main-content">
				<div class="container">
					<div class="breadcrumb">
						<a href="index.php">Home</a>
						<a href="colima.php">Campus Colima</a>
						<span>Graficas</span>
					</div>
					<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Temperatura</a></li>
    <li><a href="#tabs-2">Humedad</a></li>
    <li><a href="#tabs-3">Luminosidad</a></li>
  </ul>
  <div id="tabs-1">
    <p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
  </div>
  <div id="tabs-2">
    <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
  </div>
  <div id="tabs-3">
    <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
    <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
  </div>
</div>
				</div>
				<div class="fullwidth-block">
					<div class="container">
						<div class="row">
							<div class="content col-md-8">
								<h2 class="entry-title">Campus Colima</h2>

									<div id="chart_div"></div>
									<div id="chart_div1"></div>
									<div id="chart_div2"></div>

							</div>
							<div class="sidebar col-md-3 col-md-offset-1"> 	 
								<?php
								if (isset($_SESSION['nickname']))
								{
									echo "
									<div class='widget' style='margin-top: 54px'>
										<h3 class='widget-title'>Consulta: </h3>
										<ul class='arrow-list'>
											<li><a href='graficasColima.php'>Graficas</a></li>
											<li><a href='tablasColima.php'>Tablas</a></li>
										</ul>
									</div>";
								}	
								
								?>  	
								<!-- mapa de google -->
							<div class="mapa2" style="width: 266px; margin-top: 60px">
								<div class="contact-details">
									<div class="map" data-latitude="19.2490983" data-longitude="-103.699527"></div>
									<div class="contact-info">
									<address>
										<img src="images/icon-marker.png" alt="">
										<p>Estación Meteorológica <br>
										
										Avenida Universidad 333, Las Víboras, 28040 Colima, Col.   </p>
									</address>	
									</div>
								</div>
							</div>
							</div>
							
						</div>
					</div>
				</div>
			</main> <!-- .main-content -->

		<footer class="site-footer">
			<div class="container">

						<div class="social-links" style="margin: 0px auto;">
							<a href="https://www.facebook.com/" ><i class="fa fa-facebook"></i></a>
							<a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
							<a href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a>
							<a href="https://es.pinterest.com/"><i class="fa fa-pinterest"></i></a>

				<p class="colophon2" style="text-align: center;">Copyright 2016 Universidad de Colima. Designed by Digital Systems. All rights reserved</p>
				<p class="colophon">with love... 5 B ♥</p>
			</div>
			</div>
		</footer> <!-- .site-footer -->s
		</div>
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDbuykDwQI1f_dhwNFm_O-OAOovsKW5huI&sensor=false"></script>
			
			</body>

</html>