<?php
include 'boot.php';
include 'time.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Visita</title>
  <!-- Bootstrap Validator library-->
  <script src="//oss.maxcdn.com/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>
  <style type="text/css">
    body{
      background: url(img/salud3.jpg);
      background-size: 50%;
    }
  </style>  
</head>
<body>
  <div class="container">
	<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <ul class="navbar-nav">
    <li class="nav-item">
    	<a class="nav-link" href="index.php">HOSVISIT</a>
    </li>    
    <li class="nav-item">
    	<a class="nav-link" href="datos_persona.php">Datos del visitador</a>
    </li>
    <li class="nav-item ">
    	<a class="nav-link" href="datos_visita.php">Datos de la visita</a>
    </li>
    <li>
    	<a href="datos_salida.php" class="nav-link active">Salida</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="cuadro.php">Ver Visitas</a>
    </li>
  </ul>
	</nav>
</div>


    <div class="row">
      <div class="col-sm-3"></div>


      <div class="col-sm-6">
            <form action="registro_salida.php" method="POST" name="form" id="form">
				<center>
					<div class="card">
						<div class="form-group">
							<p>Ingrese su id</p>
							<input type="text" name="id_consecutivo" id="id_consecutivo" placeholder="Ingrese su id" required>
						</div>
						<div class="form-group">
							<p class="lead">Fecha cuando salio</p>
							<input type="text" name="fechasal" id="fechasal"  class="form-control" value="<?php echo $date ?>" >
						</div>
						<div class="form-group">
							<p class="lead">Hora de salida</p>
							<input type="text" name="horasal" id="horasal"  class="form-control" value="<?php echo $time ?>" >
						</div>
  						<br>
  						<button class="form-control btn btn-success">Enviar</button>
					</div>
				</center>
			</form>
      </div>
      <div class="col-sm-3"></div>
    </div>
</body>
</html>