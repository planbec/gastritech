	<!-- Footer -->
	<footer id="main-footer">
		
		<div class="footer-call-to-action">
			
			<div class="contact cols">
				<div class="col3">
					<a href="index.php" class="logo">
						<img src="img/logo_gastritech.png" alt="Gastritech"  title="Gastritech" width="240"></h1>
					</a>
				</div>

				<div class="col3">
					<h3>Enlaces</h3>
					<ul>
						<li><a href="#" class="active">Home</a></li>
						<li><a href="#">Productos</a></li>
						<li><a href="#">Quienes somos</a></li>
						<li><a href="#">Noticias</a></li>
						<li><a href="#">Cont&aacute;ctenos</a></li>
					</ul>
				</div>

				<div class="col3">
						<h3>Direcci&oacute;n</h3>
						Av. Joaquín Orrantia y Av. Juan Tanca Marengo<br>
						Edificio Equilibrium, Piso 4, Of 417<br>
						Teléfono: 042109180 Ext 129<br>
						GUAYAQUIL, ECUADOR<br>
						E-mail: <a href="mailto:info@gastritech.com.ec">info@gastritech.com.ec</a>
				</div>
				

			</div>
			
		</div><!-- /.footer-call-to-action -->
		
		<div id="bottom-footer" class="container cf">
			
			<!-- Copyright -->
			<div class="copyright">
				&copy; 2018 Gastritech  -  Todos los derechos reservados. 
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