<div class="citas">
		<form action="enviar_cita.php" method="post">
		<h2>Agenda tu cita</h2>
		<input type="text" id="nombre" name="nombre" placeholder="Nombre" required />
		<input type="text" id="email" name="email" placeholder="e-mail" required />
		<input type="text" id="telefono" name="telefono" placeholder="Telefono" required />
		<select name="doctor">
		  <option value="">Doctor...</option>
		  <option value="Dr-Mauricio-Riofrio">Dr. Mauricio Riofrio Riofrio</option>
		  <option value="Dr-Carlos-Freire">Dr. Carlos Freire Alprecht</option>
		  <option value="Dr-Renee-Alvarado">Dr. Reneé Alvarado</option>
		  <option value="Dra-Ericka-Serrano">Dra. Ericka Judith Serrano</option>
		</select>
		<input type="date" id="fecha" name="fecha" placeholder="Fecha" required="">
		<input type="submit" value="Enviar" class="btn-form">
	</form>
</div>