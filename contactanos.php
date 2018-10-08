<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Contacta con M&A Perú Corporation sac">
	<meta name="keywords" content="Contacta con M&A Perú Corporation sac, Contacta con m&a Perú Corporation sac ">
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

  <body style="background-image: url('imagenes/importaciones.jpg'); background-repeat: no-repeat; width: 100%; height: 100%; background-color: #cccccc;">



    <div class="container">

      <header class="masthead">
        <h3 class="text-muted"></h3>
		<!-- menu -->
		<?php include'menu.php'; ?>
		<!-- menu fin -->
      </header>

	  <!-- Example row of columns -->
	    <div class="container" >
		  <div class="row">
			  <div class="col-lg-12 contactanos"><br><br>
				  <h2 class="nosotros-cubos titulo-h2">Formulario de Contacto</h2><br><br>
				  <form action="correo.php" method="post">
					  <div class="row">
						  <div class="col-lg-2">
						  </div>
						  <div class="col-lg-4 contactanos-cajas">
							<label for="nombre">Nombres y Apellidos:</label><br>
							<INPUT class="form-control" TYPE="text" NAME="nombre" id="nombre" AUTOFOCUS placeholder="Nombres Completos" required><br>
	  					    <label for="empresa">Nombre de la Empresa:</label>
							<INPUT class="form-control" TYPE="text" class="form-control" NAME="empresa" id="empresa"placeholder="Sin Abreviaturas" required><br>
							<label for="ruc01">RUC:</label>
	  					    <INPUT class="form-control" TYPE="number" id="ruc01" NAME="ruc" required><br>
							<label for="direccion">Dirección de la Tienda:</label>
	  					    <INPUT class="form-control" TYPE="text" id="direccion" NAME="direccion" placeholder="Dirección Exacta" required><br>
						  </div>
						  <div class="col-lg-4 contactanos-cajas">
							<label for="telefono">Teléfono:</label>
  	  						<INPUT class="form-control" id="telefono" TYPE="number" NAME="telefono" placeholder="987654321" required><br>
							<label for="correo">Correo:</label>
							<INPUT class="form-control" id="correo" TYPE="gmail" SIZE="30" NAME="correo" placeholder="TuCorreo@gmail.com" required><br>
							<label for="mensaje">Escribenos tu mensaje:</label>
	  						<textarea  class="form-control" id="mensaje" name="mensaje" rows="7" required>
	  						</textarea>
						  </div>
						  <div class="col-lg-2">
						  </div>
					  </div><br><br>
					<p align="center">
					<input class="btn btn-primary" type="submit" value="Enviar">
					</p>
				  </form>
				  <br>
			  </div>
		  </div>

  		</div>
		<!-- footer -->
        <?php include'footer.php'; ?>
  	    <!-- footer -->
	  </div>



    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
