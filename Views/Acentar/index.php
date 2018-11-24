<div class="container">
  <?php
  if(mysqli_num_rows($datos)>0){
  ?>
  <h3>Aplicaciones Web 702</h3>
  <br>

  <br>
  <br>
<!--<p class="oki">Aplicaciones Web 702</p>

  <script>document.querySelector("p.oki").style.backgroundColor="Green";</script>
<br>-->
<br>
  <table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Alumno</th>

        <th scope="col"></th>

      <th scope="col">Unidad 1</th>
      <th scope="col">Unidad 2</th>
      <th scope="col">Unidad 3</th>
      <th scope="col">Unidad 4</th>
      <th scope="col">Promedio</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
<?php

while($fila=mysqli_fetch_assoc($datos))


{ ?>



    <tr>

      <td scope="col"><?php echo $fila['id_usuario'] ?></td>
      <td scope="col"><?php echo $fila ['ap']." ".$fila['am']." ".$fila['nombre_per']?></td>
      <td scope="col"></td>
<td scope="col"><?php echo $fila['calificacion']?></td>
      <td scope="col"></td>
        <td scope="col"></td>
        <td scope="col"></td>
        <td scope="col"></td>

        <th scope="col"><button class="btn btn-success editar"data-toggle="modal" data-target="#exampleModal" id="<?php echo $fila['id_usuario'] ?>">Editar</button> </th>
        <th scope="col"><a class="btn btn-danger eliminar" href="<?php echo URL ?>Acentar/eliminar/<?php echo $fila['id_usuario'] ?>">Eliminar</button></th>

    </tr>
  <?php } ?>
    </tbody>
  </table>
  <?php
} else { ?>
  <h2>No se encuentra ningun dato</h2>
<?php } ?>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editando</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-signin" action="" method="post" id="actualizacion">
                    <input type="text" hidden name="id" id="id" value="">
                    <div class="form-group">
                        <input type="text" class="form-control"
                               id="nombre_per" name="nombre_per"></input>
                        <label for="nombre_per">Nombre(s) Persona</label>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control"
                               id="no_unidades" name="no_unidades"></input>
                        <label for="no_unidades">Apellido Paterno</label>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control"
                               id="no_unidades" name="no_unidades"></input>
                        <label for="no_unidades">Apellido Materno</label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</div>
<br>
<script type="text/javascript">
$(document).ready(function(){
  $(".editar").click(function(){
    var id=$(this).attr('id');
    $.post("<?php echo URL ?>Acentar/get/"+id,{},function(data){
      if(data){
        data=JSON.parse(data)
        $("#id").val(data['id_usuario'])
        $("#nombre_per").val(data['nombre_per'])
        $("#ap").val(data['ap'])
        $("#am").val(data['am'])
        $("#exampleModal").modal('show');
      }
    })
  })
  $(".actualiza").click(function(){
    var arreglo=$("#actualizacion").serializeArray();
    $.post("<?php echo URL ?>Acentar/edit/",{arreglo:arreglo},function(data){
      window.location.href="<?php echo URL ?>Acentar/index";
    })
  })
})
</script>
