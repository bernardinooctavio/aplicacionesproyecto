<div class="container">
    $('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
    })

    <?php

  if(mysqli_num_rows($datos)>0){
  ?>
      <br>
      <br>
  <h3>Aplicaciones Web 702</h3>
  <br>
  <div class="col-"></div>
  <div class="col-">
  <br><button type="button" class="btn btn-info pdf"><i><b>Imprimir PDF</b></i></button>
  </div>
  <br>

<br>
  <table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
  <th scope="col">Materias</th>
  <th scope ="col">Unidades</th>
  <th></th>
<th></th>
<th></th>
<th></th>
<th></th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
<?php

while($fila=mysqli_fetch_assoc($datos))
{ ?>



    <tr>

      <td scope="col"><?php echo $fila['id_materia']?></td>
      <td scope="col"><?php echo $fila['desc_materia']?></td>
      <td scope="col"><?php echo $fila['no_unidades']?></td>
      <td scope="col"></td>
      <td scope="col"></td>
      <td scope="col"></td>
        <td scope="col"></td>
        <td scope="col"></td>


        <th scope="col"><button type="button" class="btn btn-success editar" data-toggle="modal" data-target="#exampleModal" id="<?php echo $fila['id_materia'] ?>">Editar</button></th>
        <th scope="col"><a class="btn btn-danger eliminar" href="<?php echo URL ?>Materia/eliminar/<?php echo $fila['id_materia'] ?>">Eliminar</button></th>

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
                               id="desc_materia" name="desc_materia"></input>
                        <label for="desc_materia">Materia</label>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control"
                               id="no_unidades" name="no_unidades"></input>
                        <label for="no_unidades">Numero de unidades</label>
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
    $.post("<?php echo URL ?>Materia/get/"+id,{},function(data){
      if(data){
        data=JSON.parse(data)
        $("#id").val(data['id_,materia'])
        $("#desc_materia").val(data['desc_materia'])
        $("#no_unidades").val(data['no_unidades'])
        $("#myModal").modal('show');
      }
    })
  })
  $(".actualiza").click(function(){
    var arreglo=$("#actualizacion").serializeArray();
    $.post("<?php echo URL ?>Materia/edit/",{arreglo:arreglo},function(data){
      window.location.href="<?php echo URL ?>Materia/index";
    })
  })
})
</script>


<script type="text/javascript">
  $(document).ready(function(){
    $(".pdf").click(function(){
    //window.open("<?php echo URL?>Grupo/printgrupo");
    window.location.href="<?php echo URL?>Materia/printmateria";
    })
  })
</script>
