<div class="citas">
		<form action="enviar_cita.php" method="post">
		<h2>Agenda tu cita</h2>
		<input type="text" id="nombredeusuario" name="nombredeusuario" placeholder="Nombre" required="">
		<input type="email" id="correoelectronico" name="correoelectronico" placeholder="email" required="">
		<input type="text" id="telefono" name="telefono" placeholder="Teléfono" required="">
		<select name="doctor">
		  <option value="">Doctor...</option>
		  <option value="Dr-Mauricio-Riofrio">Dr. Mauricio Riofrio Riofrio</option>
		  <option value="Dr-Carlos-Freire">Dr. Carlos Freire Alprecht</option>
		  <option value="Dr-Renee-Alvarado">Dr. Reneé Alvarado</option>
		  <option value="Dra-Ericka-Serrano">Dra. Ericka Judith Serrano</option>
		</select>
		<input type="date" id="dia" name="dia" placeholder="Día" required="">
		<input type="submit" value="Enviar" class="btn-form">
	</form>
</div>