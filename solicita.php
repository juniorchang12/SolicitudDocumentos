
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
<script src='https://www.google.com/recaptcha/api.js'></script>
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
								<li><a class="scroll" href="documento.html">Documentación<span> </span></a></li>
								<li><a href="index.html/about">Nosotros<span> </span></a></li>
								<li><a class="active" href="solicita.php">Solicita<span> </span></a></li>
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
				<h1>Solicitud de Documento</h1>
				<!-- news-grids -->
				
				<!-- news-grids -->
			</div>
		  <!-- news-section -->
		</div>
		<div id="solicitud" class="solicitud">
			<div class="container">
				<div class="solicitud-grids">
					<div class="col-md-6 solicitud-left">
						<h4>Registro de Visitas<span> </span></h4>
						<!-- <a href="#"><img src="images/logo.png"  class="img-responsive" title="skokov" /></a> -->
						<p>Aquí tendras los datos de los visitantes a los funcionarios públicos, tales como día, hora y motivo de visita.</p>
						<form name="formulario2" action="" id="formulario2" method="post" onSubmit="return validar()">
						  <!-- Campo de entrada de fecha -->
						   <fieldset>
						  Selecciona la fecha deseada: 
						  <input type="date" name="fecha" id="fecha">
						 <p>
						 <input style="float:left" type="submit" value="Buscar" href="javascript:void(0);" onclick="FullScreen('reporte.php');"
						 onclick="validar()" />
						 </p></fieldset>
						</form>
						<script type="text/javascript">
							/*----*///
							function validar()
{
    var fecha=document.getElementById("user_date").value;
    if(validate_fecha(fecha)==true)
        document.getElementById("result").innerHTML="La fecha "+fecha+" es correcta";
    else
        document.getElementById("result").innerHTML="La fecha "+fecha+" es incorrecta";
}
							// function isValidDate(day,month,year)
								// {
									// var dteDate;
									// month=month-1;
									// dteDate=new Date(year,month,day);
									// return ((day==dteDate.getDate()) && (month==dteDate.getMonth()) && (year==dteDate.getFullYear()));
								// }		
							</script>
						<ul>
							<li><span class="co-icon2"> </span>La información a mostrar es de forma pública.</li>
							<!-- <li><span class="co-icon3"> </span><a href="mailto:info(at)fashion.com">mynameisskokov@gmail.com</a></li> -->
					   </ul>
					   <label> </label>
					</div>
					<div class="col-md-6 solicitud-right" >
						<h4>Documento<span> </span></h4>
						<div>
							<h3>SOLICITUD DE ACCESO A LA <br> INFORMACIÓN PÚBLICA</h3>
							<p>(Texto Único Ordenado de la Ley N° 27806, Ley de<br>
							Transparencia y Acceso a la Información Pública,<br>
							aprobado por Decreto Supremo N° 043-2003-PCM)</P>
						</div>
						<p>Por favor llenar los espacios en blanco para completar la solicitud.</p>
						<form action="" name="formulario1" id="formulario1" method="post" onSubmit="return validacion1()">
							<p>II. DATOS DEL SOLICITANTE:</p>
							<input type="text" class="text" name="nombre" id="nombre" placeholder="APELLIDOS Y NOMBRES / RAZÓN SOCIAL" >
							<input type="text"  class="text" name="documento" id="documento" placeholder="DOCUMENTO DE IDENTIDAD: D.N.I./L.M./C.E./OTRO"/ 
							pattern="[0-9]{8,8}\" required/>
							<p><b>DOMICILIO</b></p>
							<input type="text" class="text" name="calle" id="calle" title="Se necesita el nombre de la calle" placeholder="AV/CALLE/JR/PSJ. " required/>
							<input type="text" class="text" name="numcalle" id="numcalle" title="Se necesita el número de casa" placeholder="N°/DPTO./INT." required/>
							<input type="text" class="text" name="urba" id="urba" title="Se necesita el nombre de la Av." placeholder="URBANIZACIÓN" required/>
							<div>
							<label for="distrito">Distrito</label>
							<select name="distrito">
							  <option value="0">Distrito</option>
							  <option value="1">Pacasmayo</option>
							</select>
							</div>
							<div>
							<label for="provincia">Provincia</label>
							<select name="provincia">
							  <option value="1">Pacasmayo</option>
							</select>
							</div>
							<label for="departamento">Departamento</label>
							<select name="departamento">
							  <option value="1">La Libertad</option>
							</select>
							<input type="email" name="email" class="text" id="email" placeholder="CORREO ELECTRÓNICO" 
							pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{3}" required/>
							<input type="tel" name="telefono" class="number" id="telefono" placeholder="TELÉFONO" pattern="[0-9]{9}"required/>
							<p>III. INFORMACIÓN SOLICITADA:</p>
							<textarea class="text" type="text" name="solicitud" id="solicitud" placeholder="Escriba el documento o información que necesita"> </textarea>
							<p>IV. DEPENDENCIA DE LA CUAL SE REQUIERE LA INFORMACIÓN:</p>
							<select name="dependencia">
							  <option value="1">Dependencia...</option>
							  <option value="1">D2</option>
							  <option value="1">D3</option>
							</select>
							<p>V. FORMA DE ENTREGA DE LA INFORMACIÓN:</p>
							<p>La información solicitada por este medio se enviará a la dirección de correo electrónico del solicitante.</p>
							<p>APELLIDOS Y NOMBRES.</p>
							<input type="text" class="text" name="nombre2" id="nombre2" placeholder="APELLIDOS Y NOMBRES"/>
							<p>Firma.</p>
							<p>OBSERVACIONES.</p>
							<textarea class="text" name="observacion" id="observacion" placeholder="Escriba una observación o detalle del documento"> </textarea>
							<p>NOTA:</p>
							<p>EL envio del documento digital, se enviará en el transcurso de los dos días, iniciando desde el día de la petición de la solicitud.
							<br>Terminos y Condiciones.</p>
							<button
								class="g-recaptcha"
								data-sitekey="6LenZDMUAAAAAMVUgm6VsPhoGEG75X-QLrNfE8I5"
								data-callback="YourOnSubmitFn">
							</button>
							<input type="submit" name="submit" value="Enviar">
							<input type="reset" name="borrar" value="Borrar">
						</form>
						<script type="text/javascript">
						history.go(1)
						function validacion1(){
							debugger;
								var nombres=document.getElementById("nombre").value;
						ingresoU = this.formulario1.nombre.value
						if (ingresoU.length<1 || (/[^A-Za-z\s]/.test(nombres))){
						alert("Por favor , debe de ingresar el Nombre de la Área.");
						this.formulario1.nombre.focus();
						return false;}
						}
						</script>
						<script type="text/javascript">
						/*-------*/
						
						/*function validacion2() {
							
							if(formulario1.distrito.value=="")
							{
							alert('Error: ["No ha seleccionado un Distrito."]');
							formulario.distrito.focus();
							return(false);
							}
							if($("distrito option:selected").val() == 0) {
								alert("Debe Seleccionar el Distrito");
								return false;
							}
							if($("provincia option:selected").val() == 0) {
								alert("Debe Seleccionar la Provincia);
								return false;
							}
							if($("departamento option:selected").val() == 0) {
								alert("Debe Seleccionar el Departamento");
								return false;
							}
							if(formulario1.soliciud.value.length==0) { //comprueba que no esté vacío
							formulario1.soliciud.focus();   
							alert('No ha escrito el nombre de soliciud'); 
							return false; //devolvemos el foco
							}
							alert('Su Solicitud se envío correctamente'); 
							return true;
							}
						/*-----*/
						</script>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
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
			function FullScreen(theURL)
				{
					window.open(theURL, '', 'fullscreen=yes, scrollbars=auto');
				}
		</script>

		
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
			
			/*-------------------*/
			
		</script>
			<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
		<!-- footer -->
		<!-- /container -->
	</body>
</html>

