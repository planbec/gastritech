<?php 
$nombresitio = "Quality of Care | Calidad de Vida";
//$contacto = "davichotk@gmail.com";
$contacto = "recepcion@qualityofcare.com.ec";
$gracias = "Gracias";
$doctor = $_POST["doctor"];
?>
				
<?php include ("code-head.php"); ?>

<body>
<?php include("header.php"); ?>
	
	<main id="content-area">
		<div class="bg-cont">
	
		<article class="single-page">
			
			
			<header class="page-header">
				<div class="container">		
					<h1>Cont&aacute;ctenos</h1>					
				</div>
			</header><!-- /.page-header -->
			
			
			
			<div class="container page-content">

				<div class="col-right">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1185.343961273957!2d-79.90679446053717!3d-2.151407717654847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x516eabf4c058c0a8!2sQuality+of+Care!5e0!3m2!1ses-419!2s!4v1472854845890" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					<p><strong>Direcci&oacute;n:</strong> Centro empresarial Ciudad Col&oacute;n, Edf. Empresarial 1, 2do piso Of 208<br>
					<strong>Telfs.:</strong> (593) 0996179227 - 0996171061<br>
					<strong>E-mail:</strong> <a href="mailto:info@qualityofcare.com.ec">info@qualityofcare.com.ec</a></p>
				</div>


			<div class="col-left">

					<p>Este mensaje fue enviado al siguiente correo electr&oacute;nico: <a href="mailto:info@qualityofcare.com.ec">info@qualityofcare.com.ec</a> </p>
			
				<?php if( $error ) { ?>
				
					<div class="alerta">
						Hubo un error, por favor completa todos los campos.
					</div>
				
				<form action="enviar_cita.php" method="post">
					<input type="text" id="nombre" name="nombre" placeholder="Nombre" required="">
					<input type="text" id="email" name="email" placeholder="email" required="">
					<input type="text" id="telefono" name="telefono" placeholder="Teléfono" required="">
					<select name="doctor">
					  <option value="">Doctor...</option>
					  <option value="Dr-Mauricio-Riofrio">Dr. Mauricio Riofrio Riofrio</option>
					  <option value="Dr-Carlos-Freire">Dr. Carlos Freire Alprecht</option>
					  <option value="Dr-Renee-Alvarado">Dr. Reneé Alvarado</option>
					  <option value="Dra-Ericka-Serrano">Dra. Ericka Judith Serrano</option>
					</select>
					<input type="text" id="dia" name="dia" placeholder="Día" required="">
					<input type="submit" value="Enviar" class="btn-form">
				</form>
				
				<?php } else { ?>
				
					<p>Su comentario ha sido enviado con &eacute;xito al correo <a href="mailto:<?php echo $contacto?>" class="link"><?php echo $contacto?></a>.<br><br>
Muy pronto estaremos en contacto con Usted.<br>Gracias por su confianza</p>


<?php 
$administrador ="";

//mensaje que le llega al administrador del sitio
$administrador .= "<br>-----Formulario de Comentarios y Sugerencias------<br><br>";
$administrador .= "<b>Nombre completo:</b> " . $_REQUEST["nombredeusuario"] . "<br><br>";
$administrador .= "<b>e-mail:</b> " . $_REQUEST["correoelectronico"] . "<br><br>";
$administrador .= "<b>Tel&eacute;fono:</b> " . $_REQUEST["telefono"] . "<br><br>";
$administrador .= "<b>Doctor:</b> " . $doctor . "<br><br>";
$administrador .= "<b>Día:</b> " . $_REQUEST["dia"] . "<br><br>";

//mensaje que le llega al postulante
$parausuario = $_REQUEST['nombredeusuario']."<br><br>Gracias por enviar tus comentarios y/o sugerencias acerca de Quality of Care | Calidad de Vida.<br><br>";
$parausuario .= "En un lapso de 24 horas responderemos a su correo electr&oacute;nico.<br><br>";
$parausuario .= "Atentamente,<br><br>";
$parausuario .= $nombresitio."<br><br>";
$parausuario .= "Este mensaje fue enviado al siguiente correo electr&oacute;nico:  ".$_REQUEST["correoelectronico"]."<br><br>";

$codigohtml = $administrador;

$email  = $contacto; // note the comma
$asunto = 'Solicitud de informacion';
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$cabeceras .= 'From: Quality of Care | Calidad de Vida <recepcion@qualityofcare.com.ec>' . "\r\n";

//correo que le llega al admnistrador del sitio web
mail($email,$asunto,$codigohtml,$cabeceras);
//correo que le llega al postulante
mail($_REQUEST["correoelectronico"],$asunto,$parausuario,$cabeceras);

?>
				
				<?php } ?>
			
			</div><!-- /.content -->
			
		</article><!-- /#single-page -->
	</div>
	</main><!-- /#content-area -->
	
	<!-- Livemotive -->
	
	
<?php include("footer.php"); ?>
	
</body>
</html>