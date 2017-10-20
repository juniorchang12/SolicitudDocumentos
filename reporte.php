<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Reporte de Visitas</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<!-- Favicons
	=================================================== -->
	<link rel="shortcut icon" href="favicon.png" >
</head>
<body>
	<div  class="solicitud">
	<div class="container contenido">
		<div class="row">
			<div class="col-md-6 solicitud-left">
						<h4>Registro de Visitas<span> </span></h4>
						<form name="form1" action="" method="post" onSubmit="return validar();">
						  <!-- Campo de entrada de fecha -->
						  <fieldset>
						  Fecha deseada:
						  <input type="date" name="fecha" >
						  <input type="submit" value="Bucar">
						  </fieldset>
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
				 <hr>
			</div>
			</div>
		<div class="row">
			<div class="col-md-12">
				<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
			        <thead>
						<tr>
							<th>FECHA</th>
							<th>VISITANTE</th>
							<th>DOCUMENTO</th>
							<th>ENTIDAD</th>
							<th>MOTIVO</th>
							<th>SEDE</th>
							<th>EMPLEADO PÚBLICO</th>
						</tr>
					</thead>
					<tbody>
						<?php
						require("conexion.php");
						$con = conectar();
						$sql= "SELECT dni,nombres,telefono FROM persona";
						$stmt =$con->prepare($sql);
						$result =$stmt->execute();
						$rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
						foreach($rows as $row){
							?>
							<tr>
								<td><?php print($row->dni); ?></td>
								<td><?php print($row->nombres); ?></td>
								<td><?php print($row->telefono); ?></td>
								<td><?php print($row->telefono); ?></td>
								<td><?php print($row->telefono); ?></td>
								<td><?php print($row->telefono); ?></td>
								<td><?php print($row->telefono); ?></td>
							</tr>
							<?php
						}
						?>
					</tbody>
			    </table>
			</div>
		</div>
	</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	
	<script type="text/javascript">
			$(document).ready(function() {
				$('#example').DataTable();
			} );
		</script>	
</body>
</html>