<?php
	include("header.php")
?>

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
						<a href="Colima.php">Campus Colima</a>
						<a href="tablasColima.php">Tablas</a>
						<span>Editar tablas</span>
					</div>
				</div>
				<div class="fullwidth-block">
					<div class="container">
						<div class="row">
							
								<div class="col-md-6 col-md-offset-1">
									<h2 class="section-title" style="text-align:center;">Ingresa los datos en los campos correspondientes: </h2>
									<?php  
										$datos = "SELECT *  FROM datos WHERE idDato = ".$_GET['idDato'];
										$result = mysqli_query($con, $datos);
										if (mysqli_num_rows($result) > 0) 
										{
									    // output data of each row
										    $row = mysqli_fetch_assoc($result);
										}
									echo "
									<form action='edicionFinalizada.php' method='post' class='contact-form'>
										<div class='row'>
											<div class='col-md-6'><input type='text' name='idDato' value='".$row['idDato']."' readonly></div>
											<div class='col-md-6'><input type='text' name='idSensor' value='".$row['idSensor']."'readonly></div>
											<div class='col-md-6'><input type='text' name='dato' value='".$row['dato']."'></div>
											<div class='col-md-6'><input type='text' name='fecha' value='".$row['fecha']."'></div>
											<div class='col-md-6'><input type='text' name='hora' value='".$row['hora']."'></div>
											<div class='col-md-6'><input type='text' name='ubicacion' value='".$row['ubicacion']."'></div>
										</div>
										
										<div class='text-right' style='text-align:center;''>
											<input type='submit' value='Enviar Datos' placeholder='Send message'>
										</div>
									</form>

								</div>";
								?>

							
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
					<p class="colophon" style="text-align: center;">Copyright 2016 Universidad de Colima. Designed by Tlaloc Group. All rights reserved</p>
				</div>
			</footer> <!-- .site-footer -->
		</div>
		
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDbuykDwQI1f_dhwNFm_O-OAOovsKW5huI&sensor=false"></script>
	</body>

</html>