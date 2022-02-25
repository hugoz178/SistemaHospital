<?php
include 'conexion.php';
include 'boot.php';
?>
    <div class="col-sm-4"></div>

    <div class="col-sm-4">
    <div class="card">
        <div class="card-body">
            <center>
        <h1 class="card-title display-3"><strong>Gafette</strong></h1>

        <?php
        if (isset($_POST['btn'])){
        $id_consecutivo = $_POST['id_consecutivo'];
        $sql="SELECT id_consecutivo,nombre,departamento,foto FROM persona WHERE id_consecutivo='$id_consecutivo'";
        $result=$conex->query($sql);
        while ($mostrar=mysqli_fetch_array($result)) {
        ?>
        <p><?php echo '<img src="data:image/png;base64,'.base64_encode($mostrar['foto']). '"  class="mr-3 mt-3" style="width:50%;">'; ?></p>
        <h1 class="display-4" align="justify">Id: <br> <?php echo $mostrar['id_consecutivo'];?></h1> 
        <h1 class="display-4" align="justify">Nombre: <br> <?php echo $mostrar['nombre'];?></h1>
        <h1 class="display-4" align="justify">Departamento: <br> <?php echo $mostrar['departamento'];?></h1> 
        <?php
         } 
     }
        ?>   
        </center>   
        </div>
    </div>
    </div>
            <div class="col-sm-4"></div>