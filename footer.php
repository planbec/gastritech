	<!-- Footer -->
	<footer id="main-footer">
		
		<div class="footer-call-to-action">
			
			<div class="contact cols">
				<div class="col3">
					<h3>Nuestro Staff</h3>
					<ul>
						<li><a href="mauricio-riofrio.php" <?php if($uri == 'staff') echo 'class="active"'?> >DR. MAURICIO RIOFRIO RIOFRIO</a></li>
						<li><a href="carlos-freire.php" <?php if($uri == 'staff') echo 'class="active"'?> >DR. CARLOS FREIRE ALPRECHE</a></li>
						<li><a href="rene-alvarado.php" <?php if($uri == 'staff') echo 'class="active"'?> >Dr. Rene&eacute; &Aacute;lvarado</a></li>
						<!--li><a href="ericka-serrano.php" <?php if($uri == 'staff') echo 'class="active"'?> >DRA. ERICKA JUDITH SERRANO BUENO</a></li-->
						<li><a href="monica-jarrin.php" <?php if($uri == 'staff') echo 'class="active"'?> >Lic. M&Oacute;NICA JARR&Iacute;N</a></li>
					</ul>
				</div>

				<div class="col3">
					<h3>Tratamientos</h3>
					<ul>
						<li><a href="cirugia.php" <?php if($uri == 'cirugia') echo 'class="active"'?> >Cirug&iacute;a</a></li>
						<li><a href="quimioterapia.php" <?php if($uri == 'quimioterapia') echo 'class="active"'?> >Quimioterapia</a></li>
						<li><a href="radioterapia.php" <?php if($uri == 'radioterapia') echo 'class="active"'?> >Radioterapia</a></li>
					</ul>
				</div>

				<div class="col3">
						Direcci&oacute;n: Centro empresarial Ciudad Col&oacute;n, <br>
						Edf. Empresarial 1, 2do piso Of 208<br>
						Telfs.: (593-4) 2136748<br>
						E-mail: <a href="mailto:info@qualityofcare.com.ec">info@qualityofcare.com.ec</a><br>
						Guayaquil - Ecuador <br>
				</div>
				

			</div>
			
		</div><!-- /.footer-call-to-action -->
		
		<div id="bottom-footer" class="container cf">
			
			<!-- Copyright -->
			<div class="copyright">
				&copy; 2017 Quality of Care | Calidad de Vida  -  Todos los derechos reservados. 
			</div>

			<div class="planb">
				Desarrollado por 
				<a href="http://www.planb.ec" target="_blank"><img src="img/planb.jpg" title="PlanB.ec"></a>
			</div>
			

			
		</div><!-- /#bottom-footer -->
		
	</footer>

	<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="js/jquery.flexslider-min.js"></script>
	<script src="js/rem.min.js"></script>
	<script src="js/functions.js"></script>
	
	<script>
		jQuery('document').ready(function($){
		
			$('.flexslider').flexslider({
				selector: ".slides > .testimonio",
				animation: "slide",
				controlNav: false,
				directionNav: true,
				prevText: "Anterior",
				nextText: "Siguiente", 
			});
		
		});
	</script>