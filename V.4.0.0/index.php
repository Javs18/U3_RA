<?php 

	$conexion=mysqli_connect('localhost:3308','root','','clinica');

 ?>

<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Análisis Clínicos</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css">
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

	<!-- LOADER -->
     <!-- <div id="preloader">
		<div class="loader">
			<img src="images/preloader.gif" alt="" />
		</div>
    </div>end loader -->
    <!-- END LOADER -->
	
	<!-- Start top bar -->
	<div class="main-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="left-top">
						<a class="new-btn-d br-2" href="#"><span>HealthPower</span></a>
						<div class="mail-b"><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> HealthPower@gmail.com</a></div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="wel-nots">
						<p>Bienvenidos a HealthPower</p>
					</div>
					<div class="right-top">
						<ul>
							<li><a href="#"><div class="fb-login-button" data-width="10px" data-size="" data-button-type="" data-layout="" data-auto-logout-link="false" data-use-continue-as="false"></div></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
						</ul>
						<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v18.0&appId=372399835243585" nonce="i1DyTIum"></script>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End top bar -->
	
	<!-- Start header -->
	<header class="top-header">
		<nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
				<a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="image"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="#home">Home</a></li>
                        <li><a class="nav-link" href="#about">Acerca de Nosotros</a></li>
                        <li><a class="nav-link" href="#services">Servicios</a></li>
						<li><a class="nav-link" href="#appointment">Citas</a></li>
						<li><a class="nav-link" href="#reseñas">Reseñas</a></li>
						<li><a class="nav-link" href="#consultas">Consultas</a></li>
                        <li><a class="nav-link" href="#gallery">Galeria</a></li>
						<li><a class="nav-link" href="#team">Doctores</a></li>
                        <li><a class="nav-link" href="#blog">Blog</a></li>
						<li><a class="nav-link" href="#contact">Contactos</a></li>
						<li><a class="nav-link" href="Aviso de Proteccion de Datos.html">Aviso Proteccion de Datos</a></li>
                    </ul>
                </div>
            </div>
        </nav>
	</header>
	<!-- End header -->
	
	<!-- Start Banner -->
	<div class="ulockd-home-slider">
		<div class="container-fluid">
			<div class="row">
				<div class="pogoSlider" id="js-main-slider">
					<div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(images/slider-01.jpg);">
						<div class="lbox-caption pogoSlider-slide-element">
							<div class="lbox-details">
								<h1>Bienvenidos a HealthPower</h1>
								<p>Somos la Clinica de Analisis Clinicos mas concurrida de la Ciudad </p>
								<a href="#" class="btn">Contactanos</a>
							</div>
						</div>
					</div>
					<div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(images/slider-02.jpg);">
						<div class="lbox-caption pogoSlider-slide-element">
							<div class="lbox-details">
								<h1>Somos los mejores en Analisis Clinicos en la Ciudad</h1>
								<p>Somos la mejor opcion que buscas</p>
								<a href="#appointment" class="btn">Citas</a>
							</div>
						</div>
					</div>
					<div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(images/slider-03.jpg);">
						<div class="lbox-caption pogoSlider-slide-element">
							<div class="lbox-details">
								<h1>Los mejores tiempos de respuesta en Analisis Clinicos</h1>
								<p>Tiempos de Respuesta optimos para que no tengan problemas </p>
								<a href="#" class="btn">Contactanos</a>
							</div>
						</div>
						
					</div>
				</div><!-- .pogoSlider -->
			</div>
		</div>
	</div>
	<!-- End Banner -->
	
	<!-- Start About us -->
	<div id="about" class="about-box">
		<div class="about-a1">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="title-box">
							<h2>Acerca de Nosotros</h2>
							<p>HealthPower Numero 1 </p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="row align-items-center about-main-info">
							<div class="col-lg-6 col-md-6 col-sm-12">
								<h2> Bienvenidos a HealthPower </h2>
								<p>En HealthPower, estamos comprometidos con su bienestar y salud. Somos una clínica especializada en la realización de análisis clínicos de alta calidad, brindando servicios precisos y confiables para ayudar a médicos y pacientes a tomar decisiones informadas sobre su salud. </p>
								<p>Con años de experiencia en el campo de los análisis clínicos, nuestro equipo de profesionales altamente capacitados y tecnología de vanguardia se combinan para ofrecer un servicio excepcional. Estamos comprometidos con mantener los más altos estándares de calidad y precisión en todos nuestros análisis. </p>
								<a href="maps.html" class="new-btn-d br-2">Ubicanos</a>
								<a href="youtube.html" class="new-btn-d br-2">Saber más</a>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="about-m">
									<ul id="banner">
										<li>
											<img src="images/about-img-01.jpg" alt="">
										</li>
										<li>
											<img src="images/about-img-02.jpg" alt="">
										</li>
										<li>
											<img src="images/about-img-03.jpg" alt="">
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End About us -->
	
	<!-- Start Services -->
	<div id="services" class="services-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Servicios</h2>
						<p>Variedad de Servicios para lo que necesite </p>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-lg-12">
					<div class="owl-carousel owl-theme">
						<div class="item">
							<div class="serviceBox">
								<div class="service-icon"><i class="fa fa-h-square" aria-hidden="true"></i></div>
								<h3 class="title">Estancia en nuestras Instalaciones</h3>
								<p class="description">
									Puede permanecer en nuestras salas de espera con comodidades de 10 mientras espera sus resultados.
								</p>
								<a href="#" class="new-btn-d br-2">Leer Mas</a>
							</div>
						</div>
						<div class="item">
							<div class="serviceBox">
								<div class="service-icon"><i class="fa fa-heart" aria-hidden="true"></i></div>
								<h3 class="title">Analisis para conocer las frecuencias del Corazon</h3>
								<p class="description">
									En HealthPower puede revisar las frecuencias de su corazon. Estos resultados son rapidos y sobretodo precisos.
								</p>
								<a href="#" class="new-btn-d br-2">Leer mas</a>
							</div>
						</div>
						<div class="item">
							<div class="serviceBox">
								<div class="service-icon"><i class="fa fa-hospital-o" aria-hidden="true"></i></div>
								<h3 class="title">Analisis en todas nuestras clinicas</h3>
								<p class="description">
									Todas nuestras clinicas estan capacitadas para poder realizar todo tipo de analisis que necesite y a un modico precio.
								</p>
								<a href="#" class="new-btn-d br-2">Leer mas</a>
							</div>
						</div>
						<div class="item">
							<div class="serviceBox">
								<div class="service-icon"><i class="fa fa-stethoscope" aria-hidden="true"></i></div>
								<h3 class="title">Analisis de Sangre INSTANTANEOS</h3>
								<p class="description">
									Nuestros analisis de sangre son los mas solicitados en las clinicas, es por eso que sus tiempos de respuesta son los mas rapidos. 
								</p>
								<a href="#" class="new-btn-d br-2">Leer mas</a>
							</div>
						</div>
						<div class="item">
							<div class="serviceBox">
								<div class="service-icon"><i class="fa fa-wheelchair" aria-hidden="true"></i></div>
								<h3 class="title">Servicio express para personas discapasitadas</h3>
								<p class="description">
									Contamos con servicio express para las personas que acuden con alguna discapacidad que les impida esperar mucho tiempo.
								</p>
								<a href="#" class="new-btn-d br-2">Leer mas</a>
							</div>
						</div>
						<div class="item">
							<div class="serviceBox">
								<div class="service-icon"><i class="fa fa-plus-square" aria-hidden="true"></i></div>
								<h3 class="title">Analisis de Toxicologia  Especifico</h3>
								<p class="description">
									Este analisis nos permite saber si el cuerpo de la persona que lo solicito cuenta con alguna sustancia ilegal o medicamentos especificos.
								</p>
								<a href="#" class="new-btn-d br-2">Leer mas</a>
							</div>
						</div>
						<div class="item"> 
							<div class="serviceBox">
								<div class="service-icon"><i class="fa fa-medkit" aria-hidden="true"></i></div>
								<h3 class="title">Analisis Clinicos de Orina (Rapidos) </h3>
								<p class="description">
									Analisis para detectar problemas en los riñones o infecciones en las vias urinarias, identifica bacterias en las vias urinarias.
								</p>
								<a href="#" class="new-btn-d br-2">Leer mas</a>
							</div>
						</div>
						<div class="item">
							<div class="serviceBox">
								<div class="service-icon"><i class="fa fa-user-md" aria-hidden="true"></i></div>
								<h3 class="title">Analisis de Pruebas Geneticas</h3>
								<p class="description">
									Este Analsis identifica mutaciones genéticas que pueden estar asociadas con enfermedades hereditarias.
								</p>
								<a href="#" class="new-btn-d br-2">Leer mas</a>
							</div>
						</div>
						<div class="item">
							<div class="serviceBox">
								<div class="service-icon"><i class="fa fa-ambulance" aria-hidden="true"></i></div>
								<h3 class="title">Analisis Marcadores Tumorales</h3>
								<p class="description">
									Detectan sustancias asociadas con ciertos tipos de cáncer, como el antígeno prostático específico (PSA) para el cáncer de próstata.
								</p>
								<a href="#" class="new-btn-d br-2">Leer mas</a>
							</div>
						</div>
					</div>
				</div>
			</div>			
		</div>
	</div>
	<!-- End Services -->
	

	<!-- Start Appointment -->
	<form action="citas.php" method="post">
		<div id="appointment" class="appointment-main">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="title-box">
							<h2>Citas</h2>
							<p>Aqui podras agendar tu cita</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="well-block">
							<div class="well-title">
								<h2>Libro de Citas</h2>
							</div>
							<form>
								<!-- Form start -->
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label" for="nombre">Nombre</label>
											<input id="nombre" name="nombre" type="text" placeholder="nombre" class="form-control input-md">
										</div>
									</div>
	
									<!-- Text input-->
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label" for="correo">Correo</label>
											<input id="correo" name="correo" type="text" placeholder="correo" class="form-control input-md">
										</div>
									</div>
	
									<!-- Text input-->
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label" for="fecha">Fecha Preferida</label>
											<input id="fecha" name="fecha" type="text" placeholder="fecha" class="form-control input-md">
										</div>
									</div>
	
									<!-- Select Basic -->
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label" for="hora">Hora Preferida</label>
											<select id="hora" name="hora" class="form-control">
												<option value="8:00 to 9:00">8:00 to 9:00</option>
												<option value="9:00 to 10:00">9:00 to 10:00</option>
												<option value="10:00 to 1:00">10:00 to 1:00</option>
											</select>
										</div>
									</div>
	
									<!-- Select Basic -->
									<div class="col-md-12">
										<div class="form-group">
											<label class="control-label" for="departamento">Departmento</label>
											<select id="departamento" name="departamento" class="form-control">
												<option value="Choose Department">Elija Departmento</option>
												<option value="Gynacology">Hermatologia</option>
												<option value="Dermatologist">Quimica Clinica</option>
												<option value="Orthology">Orina</option>
												<option value="Anesthesiology">Genetica</option>
												<option value="Ayurvedic">Toxicologia</option>
											</select>
										</div>
									</div>
	
									<!-- Button -->
									<div class="col-md-12">
										<div class="form-group">
											<button id="singlebutton" name="singlebutton" class="new-btn-d br-2">Agendar Cita</button>
										</div>
									</div>
								</div>
							</form>
							<!-- form end -->
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="well-block">
							<div class="well-title">
								<h2>Porque agendar una cita con nosotros?</h2>
							</div>
							<div class="feature-block">
								<div class="feature feature-blurb-text">
									<h4 class="feature-title">24/7 Abierto</h4>
									<div class="feature-content">
										<p>Nuestras instalaciones estan disponibles TODOS los dias las 24 horas del dia, esto para brindarte un mejor servicio.</p>
									</div>
								</div>
								<div class="feature feature-blurb-text">
									<h4 class="feature-title">Personal altamente Capacitado</h4>
									<div class="feature-content">
										<p>Nuestro personal esta altamente capacitado para manejar los estudios que se realicen dentro de nuestras instalaciones. </p>
									</div>
								</div>
								<div class="feature feature-blurb-text">
									<h4 class="feature-title">Precios Bajos</h4>
									<div class="feature-content">
										<p>Precios por debajo de la competencia, en todos nuestros analisis tenemos promociones disponibles.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
	<!-- End Appointment -->


	<!-- Formas de Pago -->
	<div id="pago">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Pago</h2>
						<p>Tenemos 2 formatos de Pago mediante Paypal y Tarjetas de Credito o Debito</p>
						<script src="https://www.paypal.com/sdk/js?client-id=AcVUSm5JrMn7ng_oBjS7JQH2wAWaaMLR1v0eTnY1f5QWdw6M5jxPwZ1WyPAUGirmHVjcPgfU7tG4LLmb"></script>
						<div id="paypal-button-container" ></div>
						<script>
							paypal.Buttons({
								style:{
									color: 'blue',
									shape: 'pill',
									label: 'pay'
								},
								createOrder: function(data, actions){
									return actions.order.create({
										purchase_units: [{
											amount: {
												value: 35
											}
										}]
									});
								}
							}).render('#paypal-button-container');
						</script>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Final de Formas de pago -->
	
	<!-- Reseñas -->
	<div id="reseñas">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Reseñas</h2>
						<p>Puedes ver reseñas o noticias refentes enfermedades cotidianas</p>
						<a class="twitter-timeline" href="https://twitter.com/alejand93821454?ref_src=twsrc%5Etfw">Tweets by alejand93821454</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Fnal de reseñas -->


	<!-- Consultas -->
	<div id="consultas">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Consultas</h2>
						<p>Ultimas consultas realizadas de los pacientes.</p>
						<center>
							<table border="1" >
								<tr>
									<td>Nombre</td>
									<td>Correo</td>
									<td>Fecha</td>
									<td>Hora</td>
									<td>Departamento</td>
								</tr>
						
								<?php 
								$sql="SELECT * from citas";
								$result=mysqli_query($conexion,$sql);
						
								while($mostrar=mysqli_fetch_array($result)){
								?>
						
								<tr>
									<td><?php echo $mostrar['Nombre'] ?></td>
									<td><?php echo $mostrar['Correo'] ?></td>
									<td><?php echo $mostrar['Fecha'] ?></td>
									<td><?php echo $mostrar['Hora'] ?></td>
									<td><?php echo $mostrar['Departamento'] ?></td>
								</tr>
							<?php 
							}
							?>
							</table>
						</center>
					</div>
				</div>
			</div>
		</div>

	</div>
	<!-- Final de Consultas -->

	<!-- Start Gallery -->
	<div id="gallery" class="gallery-box">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Galeria</h2>
						<p>Galeria de algunas de las practicas que tenemos en nuestras clinicas </p>
					</div>
				</div>
			</div>
			
			<div class="popup-gallery row clearfix">
				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
						<img src="images/gallery-01.jpg" alt="">
						<div class="box-content">	
							<h3 class="title">Lorem ipsum dolor</h3>
							<ul class="icon">
								<li><a href="images/gallery-01.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>								
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
						<img src="images/gallery-02.jpg" alt="">
						<div class="box-content">
							<h3 class="title">Lorem ipsum dolor</h3>
							<ul class="icon">
								<li><a href="images/gallery-02.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>								
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">					
					<div class="box-gallery">
						<img src="images/gallery-03.jpg" alt="">
						<div class="box-content">							
							<ul class="icon">
								<li><a href="images/gallery-03.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>								
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
						<img src="images/gallery-04.jpg" alt="">
						<div class="box-content">	
							<h3 class="title">Lorem ipsum dolor</h3>
							<ul class="icon">
								<li><a href="images/gallery-04.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>								
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
						<img src="images/gallery-05.jpg" alt="">
						<div class="box-content">							
							<h3 class="title">Lorem ipsum dolor</h3>
							<ul class="icon">
								<li><a href="images/gallery-05.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>								
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">					
					<div class="box-gallery">
						<img src="images/gallery-06.jpg" alt="">
						<div class="box-content">
							<h3 class="title">Lorem ipsum dolor</h3>
							<ul class="icon">
								<li><a href="images/gallery-06.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>								
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
						<img src="images/gallery-07.jpg" alt="">
						<div class="box-content">
							<h3 class="title">Lorem ipsum dolor</h3>
							<ul class="icon">
								<li><a href="images/gallery-07.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>								
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
						<img src="images/gallery-08.jpg" alt="">
						<div class="box-content">		
							<h3 class="title">Lorem ipsum dolor</h3>
							<ul class="icon">
								<li><a href="images/gallery-08.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	<!-- End Gallery -->
	
	<!-- Start Team -->
	<div id="team" class="team-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Doctores</h2>
						<p>Estos son nuestros mejores Doctores/Analistas </p>
					</div>
				</div>
			</div>
			
			<div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/campa.jpeg" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Alejandro Campa</h3>
                            <span class="post">web developer</span>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/javi.jpg" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Javier Castillo</h3>
                            <span class="post">Web Designer</span>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/oscar.jpeg" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Oscar Martinez</h3>
                            <span class="post">web developer</span>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
			
		</div>
	</div>
	
	<!-- End Team -->
	
	<!-- Start Blog -->
	<div id="blog" class="blog-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Blog</h2>
						<p>Algunos temas de Interes </p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="blog-inner">
						<div class="blog-img">
							<img class="img-fluid" src="images/blog-img-01.jpg" alt="" />
						</div>
						<div class="item-meta">
							<a href="#"><i class="fa fa-comments-o"></i> 5 Comentarios </a>
							<a href="#"><i class="fa fa-user-o"></i> Admin</a>
							<span class="dti">25 Julio 2023</span>
						</div>
						<h2>Como Afecta la Automedicacion.</h2>
						<p>Este comportamiento puede tener diversas consecuencias negativas, tanto para la salud individual como para la sociedad en general </p>
						<a class="new-btn-d br-2" href="#">Leer Mas <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="blog-inner">
						<div class="blog-img">
							<img class="img-fluid" src="images/blog-img-02.jpg" alt="" />
						</div>
						<div class="item-meta">
							<a href="#"><i class="fa fa-comments-o"></i> 5 Comentarios </a>
							<a href="#"><i class="fa fa-user-o"></i> Admin</a>
							<span class="dti">17 Junio 2022</span>
						</div>
						<h2>Problemas Neuronales </h2>
						<p>Son afecciones que afectan el sistema nervioso, que incluye el cerebro, la médula espinal y los nervios periféricos. Estos trastornos pueden variar en gravedad y presentar una amplia gama de síntomas. </p>
						<a class="new-btn-d br-2" href="#">Leer Mas <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="blog-inner">
						<div class="blog-img">
							<img class="img-fluid" src="images/blog-img-03.jpg" alt="" />
						</div>
						<div class="item-meta">
							<a href="#"><i class="fa fa-comments-o"></i> 5 Comentarios </a>
							<a href="#"><i class="fa fa-user-o"></i> Admin</a>
							<span class="dti">31 Octubre 2018</span>
						</div>
						<h2>Anatomia Humana. </h2>
						<p>Comprender la anatomía es fundamental para la medicina, la biología, la fisioterapia y otras disciplinas relacionadas con la salud.</p>
						<a class="new-btn-d br-2" href="#">Leer Mas <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Blog -->
	
	<!-- Start Contact -->
	<div id="contact" class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Contactanos</h2>
						<p>Contactanos para agendar citas o algun problema que tenga </p>
					</div>
				</div>
			</div>
			<div class="row">
				
				<div class="col-lg-12 col-xs-12">
				  <div class="contact-block">
					<form id="contactForm">
					  <div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Tu nombre" required data-error="Please enter your name">
								<div class="help-block with-errors"></div>
							</div>                                 
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" placeholder="Tu Correo" id="email" class="form-control" name="name" required data-error="Please enter your email">
								<div class="help-block with-errors"></div>
							</div> 
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input type="text" placeholder="Tu numero" id="number" class="form-control" name="number" required data-error="Please enter your number">
								<div class="help-block with-errors"></div>
							</div> 
						</div>
						<div class="col-md-12">
							<div class="form-group"> 
								<textarea class="form-control" id="message" placeholder="Tu Mensaje" rows="8" data-error="Escribe tu Mensaje" required></textarea>
								<div class="help-block with-errors"></div>
							</div>
							<div class="submit-button text-center">
								<button class="btn btn-common" id="submit" type="submit">Enviar Mensaje</button>
								<div id="msgSubmit" class="h3 text-center hidden"></div> 
								<div class="clearfix"></div> 
							</div>
						</div>
					  </div>            
					</form>
				  </div>
				</div>
				
				
				<div class="col-lg-12 col-xs-12">
					<div class="left-contact">
						<h2>Direccion</h2>
						<div class="media cont-line">
							<div class="media-left icon-b">
								<i class="fa fa-location-arrow" aria-hidden="true"></i>
							</div>
							<div class="media-body dit-right">
								<h4>Direccion</h4>
								<p>Avenida de las Torres 32560</p>
							</div>
						</div>
						<div class="media cont-line">
							<div class="media-left icon-b">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="media-body dit-right">
								<h4>Correo</h4>
								<a href="#">HealthPower@gmail.com</a><br>
								<a href="#">HealthPower@gmail.com</a>
							</div>
						</div>
						<div class="media cont-line">
							<div class="media-left icon-b">
								<i class="fa fa-volume-control-phone" aria-hidden="true"></i>
							</div>
							<div class="media-body dit-right">
								<h4>Numero Telefonico</h4>
								<a href="#">6568565384</a><br>
								<a href="#">6561222000</a>
							</div>
						</div>
					</div>
				</div>
				
				
			</div>
		</div>
	</div>
	<!-- End Contact -->
	

	
	<!-- Start Footer -->
	<footer class="footer-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="footer-company-name">All Rights Reserved. &copy; 2023 <a href="#">HealthPower</a> Design By : HealthPower</a></p>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer -->
	
	<a href="#" id="scroll-to-top" class="new-btn-d br-2"><i class="fa fa-angle-up"></i></a>

	<!-- ALL JS FILES -->
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script> 
	<script src="js/slider-index.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/TweenMax.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
	<script src="js/isotope.min.js"></script>	
	<script src="js/images-loded.min.js"></script>	
    <script src="js/custom.js"></script>

	<script>
  
        <!-- Add the Facebook SDK for Javascript -->
  
        (function(d, s, id){
                              var js, fjs = d.getElementsByTagName(s)[0];
                              if (d.getElementById(id)) {return;}
                              js = d.createElement(s); js.id = id;
                              js.src = "https://connect.facebook.net/en_US/sdk.js";
                              fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk')
        );


        window.fbAsyncInit = function() {
            FB.init({
                      appId            : '372399835243585',
                      xfbml            : true,
                      version          : 'v2.1'
                    });
            FB.login(function(response) {
                      if (response.authResponse) {
                           console.log('Welcome!  Fetching your information.... ');
                           FB.api('/me', {fields: 'name, email'}, function(response) {
                               document.getElementById("profile").innerHTML = "Good to see you, " + response.name + ". i see your email address is " + response.email
                           });
                      } else { 
                           console.log('User cancelled login or did not fully authorize.'); }
            });
        };


		FB.getLoginStatus(function(response) {
			if (response.status === 'connected') {
			// the user is logged in and has authenticated your
			// app, and response.authResponse supplies
			// the user's ID, a valid access token, a signed
			// request, and the time the access token 
			// and signed request each expire
		var uid = response.authResponse.userID;
		var accessToken = response.authResponse.accessToken;
			} else if (response.status === 'not_authorized') {
				// the user is logged in to Facebook, 
				// but has not authenticated your app
			} else {
				// the user isn't logged in to Facebook.
			}
		});

		FB.getLoginStatus(function(response) {
    		statusChangeCallback(response);
		});

		FB.login(function(response){
 		 // handle the response 
		});

      </script>
</body>
</html>