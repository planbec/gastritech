<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-84436205-1', 'auto');
  ga('send', 'pageview');

</script>


	<!-- Main-header -->
	<header id="main-header" class="">
		<div class="header-cont">
			<!-- Logo-header -->
			<div class="logo-header">
				<h1 class="logo">
					<a href="index.php">
						<img src="img/logo_quality.png" alt="Quality of Care - Calidad de Vida"  title="Quality of Care - Calidad de Vida" width="240"></h1>
					</a>
				<h2 class="slogan">Quality of Care - Calidad de Vida</h2>
			</div>

			
			<span class="menu-trigger"><i class="fa fa-bars"></i></span>
			
			<!-- Main-menu -->
			<nav id="main-menu" role="navigation" class="closed">
			<div class="redes">
				<span><a href="index.php" <?php if($uri == 'index') echo 'class="active"'?> ><i class="fa fa-home" aria-hidden="true"></i></a></span>
				<span><a href="contactos.php" <?php if($uri == 'contactos') echo 'class="active"'?> ><i class="fa fa-envelope" aria-hidden="true"></i></a></span>
				<?php if($uri == 'index') echo '<a href="#miModal" class="btn">Agenda tu cita</a>' ?>
			</div>


				<ul>
					<li><a href="quienessomos.php" <?php if($uri == 'quienessomos') echo 'class="active"'?> >Quienes somos</a></li>
					<li><a href="staff.php" <?php if($uri == 'staff' || in_array($uri,$staff) ) echo 'class="active"'?> >Staff</a></li>
					<li><a href="tratamientos.php" <?php if($uri == 'tratamientos' || in_array($uri,$tratamientos) ) echo 'class="active"'?>  >Concepto de tratamientos para el C&aacute;ncer</a></li>
					<li><a href="servicios.php" <?php if($uri == 'servicios' || in_array($uri,$servicios) ) echo 'class="active"'?> >Cartera de Servicios</a></li>
					<li><a href="convenios.php" <?php if($uri == 'convenios') echo 'class="active"'?> >Convenios</a></li>
				</ul>
			</nav>
		</div>
	</header>

