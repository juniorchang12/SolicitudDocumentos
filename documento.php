
<!DOCTYPE HTML>
<html>
<head>
<title>Portal de Transparecia</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Skokov Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!---- start-smoth-scrolling---->
<!-- webfonts -->
<link href='http://fonts.googleapis.com/css?family=Arimo:400,700' rel='stylesheet' type='text/css'>
<!-- Favicons
	=================================================== -->
	<link rel="shortcut icon" href="favicon.png" >
</head>
<body>
		<!-- container -->
		<div id="home" class="header-bg bg1">
			<div class="container">
				<!-- header -->
				<div class="header">
					<!-- logo -->
					<div class="logo">
						<a href="index.html"><img src="images/logo1.png" title="Transparecia" /></a>
					</div>
					<!-- /logo -->
					<!-- top-nav -->
					
					<div class="menu">
						  <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
						    <ul class="nav" id="nav">
						    	<li><a href="index.html">Inicio<span> </span></a></li>
								<li><a class="active" href="documento.html">Documentación<span> </span></a></li>
								<li><a class="scroll" href="#about">Nosotros<span> </span></a></li>
								<li><a href="news.html">News<span> </span></a></li>
								<li><a class="scroll" href="solicita.html">Solicita<span> </span></a></li>
								<div class="clearfix"></div>
							</ul>
							<script type="text/javascript" src="js/responsive-nav.js"></script>
				    </div>		
					<div class="clearfix"> </div>
					<!-- /top-nav -->
				</div>
				<!-- /header -->
				<!-- chart -->
				<div class="chart">
					<span> </span>
				</div>
				<!-- chart -->
			</div>
			<!-- /header-bg -->
		</div>
		<!-- documentos -->
		
		<div id="news" class="news-section news-page">
			<div class="container">
				<h1>DOCUMENTOS</h1>
				<!-- news-grids -->
				<!-- <div class="menu"> -->
					 <!-- <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>   -->
						<!-- <ul class="nav" id="nav"> -->
							<!-- <li><a href="#.html" style="color:#0079C2">| Nosotros |<span> </span></a></li> -->
							<!-- <li><a href="#.html" style="color:#0079C2">| Planeamiento |<span> </span></a></li> -->
							<!-- <ul> -->
							<!-- <li><a href="#.html" style="color:#0079C2">| Presupuesto |<span> </span></a></li> -->
							<!-- </ul> -->
							<!-- <li><a href="#.html" style="color:#0079C2">| Proyectos |<span> </span></a></li><br> -->
							<!-- <li><a href="#.html" style="color:#0079C2">| Parcticipación Ciudadana |<span> </span></a></li> -->
							<!-- <li><a href="#.html" style="color:#0079C2">| Personal |<span> </span></a></li> -->
							<!-- <li><a href="#.hmtl" style="color:#0079C2">| Contratación |<span> </span></a></li> -->
							<!-- <li><a href="#.html" style="color:#0079C2">| Actividades |<span> </span></a></li> -->
							<!-- <li><a href="solicita.html" style="color:#0079C2">| Visitas |<span> </span></a></li> -->
							<!-- <div class="clearfix"></div> -->
						<!-- </ul> -->
					<!-- <script type="text/javascript" src="js/responsive-nav.js"></script> -->
				<!-- </div> -->
				<div class="clearfix"> </div>
				<div class="news-grids">
				<table width="97%">
					<tr>
						<td bgcolor="white" >
							<div class="service-grid">
									<p align="left"><h4>INSTRUMENTOS DE GESTIÓN</h4></p>
										<?php
											require("conexion.php");
											$con = conectar();
											$sql= "SELECT dni,nombres,telefono FROM persona";
											$stmt =$con->prepare($sql);
											$result =$stmt->execute();
											$rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
											foreach($rows as $row){
												?>											
											<ul>
												<li>
													<p>ROF (Reglamento de Organización y Funciones)</p>
													<a><?php print($row->dni); ?></a>
												</li>
												<li>
													<p>PAP (Presupuesto Analítico de Personal)</p>
													<a><?php print($row->nombres); ?></a>
												</li>
												<li>
													<p>ORGANIGRAMA</p>
												</li>
												<li>
													<p>MOF (Manual de Organización y Funciones)</p>
												</li>
												<li>
													<p>Clasificador de Cargos</p>
												</li>
												<li>
													<p>CAP (Cuadro de Asignación de Personal)</p>
												</li>
												<li>
													<p>MAPRO (Manual de Procedimientos)</p>
												</li>
												<li>
													<p>TUPA (Texto Único de Procedimientos Administrativos)</p>
												</li>
												<li>
													<p>Indicadores de Desempeño</p>
												</li>
											</ul>
											<?php
											}
										?>
								<p align="left"><h4>PLANES Y POLÍTICAS</h4></p>
									<ul>
										<li>
											<p>Políticas Nacionales</p>
										</li>
										<li>
											<p>POI (Plan Operativo Informático)</p>
										</li>
										<li>
											<p>PETI (Plan Estratégico de Tecnología de la Información)</p>
										</li>
										<li>
											<p>Informes de monitoreo y evaluación de los planes y políticas / Informe de Análisis Estratégico</p>
										</li>
										<li>
											<p>PESEM (Plan Estratégico Sectorial Multianual)</p>
										</li>
										<li>
											<a><p>PEI (Plan Estratégico Institucional)</p></a>
										</li>
										<li>
											<p>POI (Plan Operativo Institucional)</p>
										</li>
									</ul>
								<p align="left"><h4>RECOMENDACIONES DE AUDITORÍA</h4></p>
									<ul>
										<li>
											<p>Recomendaciones de Auditoría</p>
										</li>
									</ul>
								<p align="left"><h4>INFORMACIÓN ADICIONAL</h4></p>
									<ul>
										<li>
											<p>Información Adicional</p>
										</li>
									</ul>
							</div>  
						</td>
					</tr>
				</table>
				</div>
				<div class="news-grids">
				<!-- news-search-box -->
					
					<div class="clearfix"> </div>
				</div>
				<!-- news-grids -->
			</div>
		  <!-- news-section -->
		</div>
		<div class="footer">
			<div class="container">
				<div class="footer-left">
					<p>Template by <a href=""></a></p>
				</div>
				<div class="footer-right">
					<ul>
						<li><a href="#"><span class="in"> </span></a></li>
						<li><a href="#"><span class="face"> </span></a></li>
						<li><a href="#"><span class="twitter"> </span></a></li>
						<li><a href="#"><span class="you"> </span></a></li>
						<div class="clearfix"> </div>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
									<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
		<!-- footer -->
		<!-- /container -->
	</body>
</html>

