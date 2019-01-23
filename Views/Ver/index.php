
  <h3 align="center" style="color: ##563d7c">Seleccione una Opcion</h3>

<?php
 while ($fila=mysqli_fetch_assoc($datos[1])) { ?>
   <br><br>

   <br><br>
<div class="col col-sm-4">
<div class="card" style="width: 18rem;">
<div class="card-body">
<h5 class="card-title"><?php echo$fila['desc_materia'] ?></h5>
<h5 class="card-title"><?php echo$fila['desc_grupo'] ?></h5>
<!-- <p class="card-text"><?php echo$fila['desc_grupo'] ?></p> -->
<a href="<?php echo URL?>ver/indx/<?php echo$fila['id_materia']?>" class="card-link">Ver Materia</a>
</div>
</div>
</div>
<?php
}
 ?>

</div>
</div>
<br>
<div class="container">
  <div class="row">
    <?php
    if ($_SESSION['id_tipo_usuario']==2){

      while($fila=mysql_fetch_assoc($datos[1])){


      }
    }

    ?>

    <div class="col col-sm-4">
    <div class="card">
    <div class="card-body">
      <h5 class="card-tittle">
      </div>
        </div>
          </div>
