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
    <li class="nav-item active">
      <a class="nav-link" href="datos_visita.php">Datos de la visita</a>
    </li>
    <li>
      <a href="datos_salida.php" class="nav-link">Salida</a>
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
            <form action="registro_visita.php" method="POST" name="form" id="form">
              <center>
              <div class="card">
  <br>
  <div class="form-group">
  <p class="lead">Empresa donde proviene</p>
  <input type="text" name="empresa" id="empresa" class="form-control" placeholder="Escriba la empresa/institucíon de su proveniencia" required>
  </div>
  <div class="form-group">
  <p class="lead">Motivo de visita</p>
  <input type="text" name="motivo" id="motivo" class="form-control" placeholder="Escriba el motivo de la visita" required>
  </div>
  <div class="form-group">
  <p class="lead">Equipo</p>
  <textarea name="equipo" id="equipo" class="form-control" placeholder="Escriba los equipos" required></textarea>
  <!--input type="text" name="equipo" id="equipo" class="form-control"--> 
  </div>
  <div class="form-group">
  <p class="lead">Quien Autorizó la visita?</p>
  <input type="text" name="autorizar" id="autorizar" class="form-control" placeholder="¿Quien autorizó la visita?" required>
  </div>
  <br>
  <button class="form-control btn btn-success">Enviar</button>
</div>
</center>
  </form>
      </div>
      <div class="col-sm-3"></div>
    </div>

<!--script type="text/javascript">

$( "#form" ).bootstrapValidator({

   feedbackIcons: {
 
     valid: 'glyphicon glyphicon-ok',
 
     invalid: 'glyphicon glyphicon-remove',
 
     validating: 'glyphicon glyphicon-refresh'
 
   },
 
   fields: {
  
     horaent: {
 
       validators: {
 
         notEmpty: {
 
           message: 'Selecciona la hora de entrada'
 
         }
 
       }
 
     },

     horasal: {
 
       validators: {
 
         notEmpty: {
 
           message: 'Selecciona la hora de salida'
 
         }
 
       }
 
     },

     fechaent: {
 
       validators: {
 
         notEmpty: {
 
           message: 'Selecciona la fecha de entrada'
 
         }
 
       }
 
     },

     fechasal: {
 
       validators: {
 
         notEmpty: {
 
           message: 'Selecciona la fecha de salida'
 
         }
 
       }
 
     },     
 
     empresa: {
 
       validators: {
 
         notEmpty: {
 
           message: 'Agregue empresa'
 
         }
 
 
       }
 
     },

     motivo: {
 
       validators: {
 
         notEmpty: {
 
           message: 'Escriba el motivo'
 
         }
 
 
       }
 
     },    

     equipo: {
 
       validators: {
 
         notEmpty: {
 
           message: 'Equipo que entro'
 
         }
 
 
       }
 
     },

     autorizar: {
 
       validators: {
 
         notEmpty: {
 
           message: 'Selecciona hora de salida'
 
         }
 
 
       }
 
     }

  }
 
});

</script-->	
		

</body>
</html>