<?php 
$nombresitio = "Arroz Imperial | Un poema de arroz";
$contacto = "info@arrozimperial.ec";
//$contacto = "carlosz@outlook.com";
$gracias = "Gracias";
?>

<?php include("code-head.php"); ?>


<style type="text/css">
img, div, a, input { behavior: url("iepngfix.htc"); }
</style>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53417221-1', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body>
<div>
<!--Inicio contenedor-->
<?php include("menu_respons.php"); ?>


<!--Header-->

<?php include("header.php"); ?>

<!--fin Header-->


<!--interior-->
<div class="row">
    <div class="col12 slider">
    <img src="fotos/header_interior.png" />
	</div>
</div>
<!--fin interior-->



<!--Inicio Contenido-->
<div class="row">
    <div class="col12 contenedor">


<!--Inicio Contenido principal -->
    <div class="col8 colums ampliada sep-ver">

<h2>Cont&aacute;ctenos</h2>


<p class="textoNegro" style="text-align:center;">Su comentario ha sido enviado con &eacute;xito al correo <a href="mailto:<?php echo $contacto?>" class="link"><?php echo $contacto?></a>.<br><br>
Muy pronto estaremos en contacto con Usted.<br>Gracias por su confianza</p>


<?php 
$administrador ="";

//mensaje que le llega al administrador del sitio
$administrador .= "<br>-----Formulario de Comentarios y Sugerencias------<br><br>";
$administrador .= "<b>Nombre completo:</b> " . $_REQUEST["nombredeusuario"] . "<br><br>";
$administrador .= "<b>e-mail:</b> " . $_REQUEST["correoelectronico"] . "<br><br>";
$administrador .= "<b>Tel&eacute;fono:</b> " . $_REQUEST["telefono"] . "<br><br>";







$administrador .= "<b>Doctor:</b> " . $_REQUEST["doctor"] . "<br><br>";

        for ($i=0;$i<count($doctor);$i++)    
        {     
        echo "<br> Doctor " . $i . ": " . $doctor[$i];    
        } 


$administrador .= "<b>Día:</b> " . $_REQUEST["dia"] . "<br><br>";

//mensaje que le llega al postulante
$parausuario = $_REQUEST['nombredeusuario']."<br><br>Gracias por enviar tus comentarios y/o sugerencias acerca de Arroz Imperial S.A.<br><br>";
$parausuario .= "En un lapso de 24 horas responderemos a su correo electr&oacute;nico.<br><br>";
$parausuario .= "Atentamente,<br><br>";
$parausuario .= $nombresitio."<br><br>";
$parausuario .= "Este mensaje fue enviado al siguiente correo electr&oacute;nico:  ".$_REQUEST["correoelectronico"]."<br><br>";

$codigohtml = $administrador;

$email  = $contacto; // note the comma
$asunto = 'Solicitud de informacion';
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$cabeceras .= 'From: Arroz Imperial <davichotk@gmail.com>' . "\r\n";

//correo que le llega al admnistrador del sitio web
mail($email,$asunto,$codigohtml,$cabeceras);
//correo que le llega al postulante
mail($_REQUEST["correoelectronico"],$asunto,$parausuario,$cabeceras);

?>


    </div>
<!--Fin Contenido principal -->


<!--Inicio Asside -->
    <div class="col4 colums">
    
		<div class="sidebar">
     <h3>Ubicaci&oacute;n</h3>      
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15949.601186605876!2d-79.602141!3d-1.9948639500000007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x53d2d1d370f1ddd!2sComplejo+Tur%C3%ADstico+Rey+Park!5e0!3m2!1ses-419!2sec!4v1404489702748" width="100%" height="300" frameborder="0" style="border:0">
        </iframe>
    
<br class="clear">
 			<h3>Cont&aacute;ctenos</h3>      

            <strong>Planta:</strong> Km 53 V&iacute;a Dur&aacute;n - Babahoyo <br>
            <strong>PBX.:</strong> (593-4) 2748096<br>
            <strong>Cel.:</strong> (593) 0997000718<br>
            Guayaquil - Ecuador<br><br>
            
            <a href="mailto:info@arrozimperial.ec">info@arrozimperial.ec</a><br>
            <a href="http://www.arrozimperial.ec">http://www.arrozimperial.ec</a>
		 </div>

 
		 
    </div>
<!--Fin Asside -->



	</div>
</div>
<!--fin Contenido-->


<!--Inicio Footer-->
<?php include("footer.php"); ?>


</div>
<!--Fin contenedor-->
</div>
</body>
</html>
