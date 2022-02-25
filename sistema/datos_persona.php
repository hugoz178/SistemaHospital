<?php 
include 'boot.php';
include 'time.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Persona</title>
	<!-- JQuery Validate library-->
	<script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
	<!-- Bootstrap Validator library>
  <script src="//oss.maxcdn.com/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script-->
  <style type="text/css">
    body {
      background: url(img/salud3.jpg);
      background-size: 50%;
    }
  </style>
</head>
<body >
  <div class="container">
	<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">HOSVISIT</a>
    </li>    
    <li class="nav-item active">
      <a class="nav-link" href="datos_persona.php">Datos del visitador</a>
    </li>
    <li class="nav-item">
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
      <div class="col-sm-3" ></div>


      <div class="col-sm-6">


<center>
  <div class="card">
            <div class="form-group ">
  <p class="lead">Fotografia</p><br> 
  <!-- Stream video via webcam -->
          <div class="video-wrap">
              <video id="video" playsinline autoplay></video>
          </div>

          <!-- Trigger canvas web API -->
          <div class="controller">
            <br>
              <button id="snap" class="btn btn-danger">Tomar Foto</button> &nbsp <h4>Guardar imagen en:</h4>
          </div>
<br>

  </div>  
    <form action="registro_persona.php" method="POST" name="form" id="form" enctype="multipart/form-data">
                <!-- Webcam video snapshot-->
           <div class="form-group">     
          <canvas id="canvas" width="200" height="300"></canvas><br>
          <p class="lead">Selecciona tu Imagen de la Ruta Anterior</p>
          <input type="file" name="foto" id="foto"> 
        </div>
  <div class="form-group">  
  <p class="lead">Nombre</p>
  <div class="">
  <input type="text" name="nombre" id="nombre" placeholder="Nombre del visitante" class="form-control" required>
  </div>
  </div>


  <div class="form-group">
  <p class="lead">Tipo de identificación</p>
  <div class="">
  <select name="tipo" id="tipo" class="form-control">
    <option value="0" disabled selected>--Seleccione el tipo de identificacion--</option>
    <option value="INE">Credencial para votar (INE)</option>
    <option value="Pasaporte">Pasaporte</option>
    <option value="Cedula profesional">Cedula profesional</option>
    <option value="Licencia de conducir">Licencia de conducir</option>
  </select>
  </div>
  </div>


  <div class="form-group ">
  <p class="lead">Numero</p>
  <input type="text" name="numero" id="numero" class="form-control" placeholder="Escriba su numero de telefono" required>
  </div>



  <div class="form-group ">  
  <p class="lead">Persona a visitar</p>
  <input type="text" name="pervis" id="pervis" class="form-control" required>
  </div>
  <br><br>


  <div class="form-group ">
  <p class="lead">Departamento</p>
  <select name="departamento" id="departamento" class="form-control">
    <option value="0" disabled selected>-Seleccione el departamento-</option>
    <option value="Tococirugia">Tococirugia</option>
    <option value="Bio-Medica">Bio-Medica</option>
    <option value="Pediatria">Pediatria</option>
    <option value="Urgencias">Urgencias</option>
    <option value="Terapia Intensiva">Terapia Intensiva</option>
  </select>
  </div>

  <div class="form-group">
  <p class="lead">Fecha cuando ingresó</p>
  <input type="text" name="fechaent" id="fechaent"  class="form-control" value="<?php echo $date ?>">
  </div>
  <div class="form-group">
  <p class="lead">Hora de ingreso</p>
  <input type="text" name="horaent" id="horaent" class="form-control" value="<?php echo $time ?>">
  </div>


  <br><br>
<diV>
<button class=" btn btn-success">Enviar</button>
</diV>

</div>
</center>
</form>        
      </div>



      <div class="col-sm-3" ></div>
    </div>

<script type="text/javascript">
'use strict';

const video = document.getElementById('video');
const canvas = document.getElementById('canvas');
const snap = document.getElementById("snap");
const errorMsgElement = document.querySelector('span#errorMsg');

const constraints = {
  audio: false,
  video: {
    width: 200, height: 300
  }
};

// Access webcam
async function init() {
  try {
    const stream = await navigator.mediaDevices.getUserMedia(constraints);
    handleSuccess(stream);
  } catch (e) {
    errorMsgElement.innerHTML = `navigator.getUserMedia error:${e.toString()}`;
  }
}

// Success
function handleSuccess(stream) {
  window.stream = stream;
  video.srcObject = stream;
}

// Load init
init();

// Draw image
var context = canvas.getContext('2d');
snap.addEventListener("click", function() {
  context.drawImage(video, 0, 0, 200, 300);
        video.pause();
}

);

</script>

<!--script type="text/javascript">

$( "#form" ).bootstrapValidator({

   feedbackIcons: {
 
     valid: 'glyphicon glyphicon-ok',
 
     invalid: 'glyphicon glyphicon-remove',
 
     validating: 'glyphicon glyphicon-refresh'
 
   },
 
   fields: {
 
     nombre: {
 
       validators: {
 
         notEmpty: {
 
           message: 'Ingresa tu nombre junto con tus apellidos.'
 
         },

         regexp: {

                regexp: /^[a-zs]+$/i,

                message: 'El nombre de usuario no permite el uso de dígitos ni caracteres especiales.'

          },

         stringLength: {
 
           min: 5,

           max: 30,
 
           message: 'No más de 30 caracteres y menos de 5'
 
         }
 
       }
 
     },


    
 
     tipo: {
 
       validators: {
 
         notEmpty: {
 
           message: 'Selecciona el tipo de identificacion.'
 
         }
 
       }
 
     },

     pervis: {
 
       validators: {
 
         notEmpty: {
 
           message: 'Ingresa el nombre de la persona a visitar'
 
         }
 
       }
 
     },

     departamento: {
 
       validators: {
 
         notEmpty: {
 
           message: 'Selecciona el departamento'
 
         }
 
       }
 
     },
 
     numero: {
 
       validators: {
 
         notEmpty: {
 
           message: 'Ingrese su número de celular'
 
         },
 
         regexp: {
 
           regexp: /^[0-9]{10}$/,
 
           message: 'El Número de Celular debe ser de 10 dígitos'
 
         }

 
       }
 
     }
 
  }
 
});

</script-->
</body>
</html>
<!--script type="text/javascript">

$( "#form" ).validate({

  rules: {
    
  nombre: {
      required: true,
      },
  tipo: {
      required: true,
      },
  numero: {
      required: true,
      digits: true,
      minlength: 10,
      },
  pervis:{
      required: true,
  },    
  departamento: {
      required: true,
      }
  },
  
   messages:{
    
    nombre: {
      required: "<font color=#C0392B> Ingrese su Nombre </font>",
    },
    tipo: {
      required: "<font color=#C0392B> Seleccione el tipo de identificacion </font>",
    },
    numero: {
      required: "<font color=#C0392B> Ingrese su numero </font>",
      digits: "<font color=#C0392B> Debe ser de 10 digitos </font>",
    },
    pervis:{
      required: "<font color=#C0392B> Ingrese el nombre de la persona a visitar </font>",
    },
    departamento: {
      required: "<font color=#C0392B> Elige el departamento </font>",
       
    }
      }
});

</script-->

