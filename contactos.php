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
					<strong>Telfs.:</strong> (593-4) 2136748<br>
					<strong>E-mail:</strong> <a href="mailto:info@qualityofcare.com.ec">info@qualityofcare.com.ec</a></p>
				</div>


			<div class="col-left">
			<p>Si deseas comunicarte con nosotros puedes llamarnos a nuestros tel&eacute;fonos <br>o solo llena y env&iacute;a el siguiente formulario y nos pondremos en contacto a la brevedad posible.</p>
				<form action="enviar.php" method="post">
					
					<label for="nombre">Nombre:</label>
					<input type="text" id="nombre" name="nombre" required />
					
					<label for="email">Email:</label>
					<input type="text" id="email" name="email" required />
					
					<label for="telefono">Telefono:</label>
					<input type="text" id="telefono" name="telefono" required />
					
					<label for="mensaje">Mensaje:</label>
					<textarea id="mensaje" name="mensaje" rows="8" required ></textarea>
					
					<input type="submit" value="Enviar mensaje" class="btn" />
				
				</form>
				</div>
			
			</div><!-- /.content -->
			
		</article><!-- /#single-page -->
	</div>
	</main><!-- /#content-area -->
	
	<!-- Livemotive -->
	
	
<?php include("footer.php"); ?>
	
</body>
</html>