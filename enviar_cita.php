<?php

/****************************************************************
Recibe los datos ingresados
****************************************************************/
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$doctor = $_POST['doctor'];
$fecha = $_POST['fecha'];

if( empty($nombre) || empty($email) || empty($telefono) || empty($doctor) || empty($fecha) ) {
	$error = true;
}


/****************************************************************
Aquí debes ingresar el Asunto del mail
****************************************************************/
$subject = 'Reserva de citas desde internet de ' . $nombre ;
$fecha = stripcslashes($fecha);



/****************************************************************
Aquí se genera el cuerpo del mensaje
****************************************************************/
$mensaje = "De: $nombre \n
E-mail: $email \n
Telefono: $telefono \n
Doctor: $doctor \n
Fecha: $fecha \n
\n";

$from = "From: $email\r\n";



/****************************************************************
ingresa mail receptor
****************************************************************/

if( !$error ) {
	mail("recepcion@qualityofcare.com.ec", $subject, $mensaje, $from);
}
?>
				
<?php include ("code-head.php"); ?>

<body>
<?php include("header.php"); ?>
	
	<main id="content-area">
		<div class="bg-cont">
	
		<article class="single-page">
			
			
			<header class="page-header">
				<div class="container">		
					<h1>Agenda tu cita</h1>					
				</div>
			</header><!-- /.page-header -->
			
			
			
			<div class="container page-content">

				<div class="col-right">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1185.343961273957!2d-79.90679446053717!3d-2.151407717654847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x516eabf4c058c0a8!2sQuality+of+Care!5e0!3m2!1ses-419!2s!4v1472854845890" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					<p><strong>Direcci&oacute;n:</strong> Centro empresarial Ciudad Col&oacute;n, Edf. Empresarial 1, 2do piso Of 208<br>
					<strong>Telfs.:</strong> (593) 0996179227 - 0996171061<br>
					<strong>E-mail:</strong> <a href="mailto:recepcion@qualityofcare.com.ec">recepcion@qualityofcare.com.ec</a></p>
				</div>


			<div class="col-left">

					<p>Gracias por enviar tus comentarios y/o sugerencias<br />
					En un lapso de 24 horas responderemos a su correo electr&oacute;nico.<br /><br />

					Atentamente,<br />

				Quality of Care - Calidad de Vida<br /><br />

				Este mensaje fue enviado al siguiente correo electr&oacute;nico: <a href="mailto:recepcion@qualityofcare.com.ec">info@qualityofcare.com.ec</a> </p>
			
				<?php if( $error ) { ?>
				
					<div class="alerta">
						Hubo un error, por favor completa todos los campos.
					</div>
				

				<form action="enviar_cita.php" method="post">
					<label for="nombre">Nombre:</label>
					<input type="text" id="nombre" name="nombre" required />
					<label for="email">Email:</label>
					<input type="text" id="email" name="email" required />
					<label for="telefono">Telefono:</label>
					<input type="text" id="telefono" name="telefono" required />
					<label for="doctor">Doctor:</label>
					<select name="doctor">
					  <option value="">Elija un doctor...</option>
					  <option value="Dr-Mauricio-Riofrio">Dr. Mauricio Riofrio Riofrio</option>
					  <option value="Dr-Carlos-Freire">Dr. Carlos Freire Alprecht</option>
					  <option value="Dr-Renee-Alvarado">Dr. Reneé Alvarado</option>
					  <option value="Dra-Ericka-Serrano">Dra. Ericka Judith Serrano</option>
					</select>
					<label for="fecha">Fecha de consulta:</label>
					<input type="date" id="Fecha" name="Fecha" required="">
					<input type="submit" value="Enviar" class="btn">
				</form>

				
				<?php } else { ?>
				
					<p>Gracias por contactarnos, responder&eacute;mos a sus inquietudes lo antes posible.</p>
				
				<?php } ?>
			
			</div><!-- /.content -->
			
		</article><!-- /#single-page -->
	</div>
	</main><!-- /#content-area -->
	
	<!-- Livemotive -->
	
	
<?php include("footer.php"); ?>
	
</body>
</html>