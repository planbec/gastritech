<?php include ("code-head.php"); ?>

<body>
<?php include("header.php"); ?>
	
<main id="content-area">

	<!-- Flexslider -->
	<aside id="testimonios-area">
		<?php include("flexslider.php"); ?>
	</aside>


	<!-- Ventana modal  -->
	<div id="miModal" class="modal">
	  <div class="modal-contenido">
	    <a href="#">X</a>
			<!-- Citas -->	
				<?php include("citas.php"); ?>
	  </div>  
	</div>


	<div class="bg-cont">
		<!-- Servicios -->	
			<?php include("servicios-home.php"); ?>
		
		<!-- Convenidos -->	
			<?php include("convenios-home.php"); ?>

	<div>
</main>
	
	
<?php include("footer.php"); ?>
	
</body>
</html>