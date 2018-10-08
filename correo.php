<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="100% Tacneños">
	<meta name="keywords" content="Contacta con m&a peru corporation sac, mensajes a m&a peru corporation sac, correo de m&a peru corporation sac">
    <meta name="author" content="M&A Perú Corporation S.A.C. - DevSamuel">
    <link rel="icon" href="imagenes/logo_blanco.png">
	<!-- Movimiento en el nombre de la web -->
	<SCRIPT LANGUAGE="JavaScript">
	var txt="M&A Perú Corporation S.A.C. - Agentes de Carga Internacional";
	var espera=300;
	var refresco=null;
	function rotulo_title() {
	document.title=txt;
			txt=txt.substring(1,txt.length)+txt.charAt(0);
			refresco=setTimeout("rotulo_title()",espera);}
	rotulo_title();
	</SCRIPT>
	<!--  -->
    <title>M&A Perú Corporation S.A.C. - Agentes de Carga Internacional</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

	<!-- Estilos de la Tienda -->
	<link href="css/tienda.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/justified-nav.css" rel="stylesheet">
  </head>
  <body>
	  <?php
  		//llamando a los campos
  		$nombre = $_POST['nombre'];
  		$empresa = $_POST['empresa'];
  		$ruc = $_POST['ruc'];
  		$direccion = $_POST['direccion'];
  		$telefono = $_POST['telefono'];
  		$correo = $_POST['correo'];
  		$mensaje = $_POST['mensaje'];

  		// Datos del correo
  			//$destinatario = 'gerencia@ma-peru.com' . ', '; // la coma es por si hay destinatarios multiples
  			//$destinatario .= 'gerencia@ma-peru.com';
  		$destinatario = 'gerencia@ma-peru.com'; // la coma es por si hay destinatarios multiples
  		$asunto = "Nuevo Mensaje desde la web";

  		//Cuerpo del mensaje Final
  		$carta = "De: $nombre\n";
  		$carta .= "Empresa: $empresa\n";
  		$carta .= "RUC: $ruc\n";
  		$carta .= "Direccion: $direccion\n";
  		$carta .= "Telefono: $telefono\n";
  		$carta .= "Correo : $correo\n";
  		$carta .= "Mensaje: $mensaje";

  		//Enviando mensaje
  		mail($destinatario, $asunto, $carta);
  	 ?>
	 <div class="container">
	 	<div class="row">
			<div class="col-lg-12" align="center">
				<h4>Mensaje Enviado Correctamente</h4>
				<a class="btn btn-primary" href="index.php">Regresar</a>
			</div>

	 	</div>
	 </div>
  </body>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-3.2.1.slim.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
