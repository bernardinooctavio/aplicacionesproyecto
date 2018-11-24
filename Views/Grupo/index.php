<div class="container">
  <?php
  if(mysqli_num_rows($datos)>0){
  ?>
  <h3>Aplicaciones Web 702</h3>
  <br>
<div class="col-"></div>
<div class="col-">
<br><button type="button" class="btn btn-info pdf"><i><b>Imprimir PDF</b></i></button>
</div>
  <br>
  <br>

<br>
  <table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
  <th scope="col">Grupo</th>
  <th></th>
  <th></th>
<th></th>
<th></th>
<th></th>
<th></th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
      <th scope="col">Insertar</th>
    </tr>
  </thead>
  <tbody>
<?php

while($fila=mysqli_fetch_assoc($datos))
{ ?>



    <tr>

      <td scope="col"><?php echo $fila['id_grupo']?></td>
      <td scope="col"><?php echo $fila['desc_grupo']?></td>
      <td></td>
      <td scope="col"></td>
      <td scope="col"></td>
      <td scope="col"></td>
        <td scope="col"></td>
        <td scope="col"></td>


        <th scope="col"><button type="button" class="btn btn-success editar" data-toggle="modal" data-target="#exampleModal" id="<?php echo $fila['id_grupo'] ?>">Editar</button></th>

        <th scope="col"><a class="btn btn-danger" href="<?php echo URL ?>Grupo/eliminar/<?php echo $fila['id_grupo'] ?>">Eliminar</a></th>

        <th scope="col"><button type="button" class="btn btn-warning insertar" data-toggle="modal" data-target="#Modalinsertar1" id="<?php echo $fila['id_grupo'] ?>">Insertar</button></th>


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
                    <input type="text" hidden name="id_grupo" id="id_grupo" value="">
                    <div class="form-group">
                        <input type="text" class="form-control"
                               id="desc_grupo" name="desc_grupo"></input>
                        <label for="desc_grupo">Descripcion del Grupo (Numero)</label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="exampleModal">Guardar</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
  $(".editar").click(function(){
    var id=$(this).attr('id_grupo');
    $.post("<?php echo URL ?>Grupo/get/"+id_grupo,{},function(data){
      if(data){
        data=JSON.parse(data)
        $("#id_grupo").val(data['id_grupo'])
        $("#desc_grupo").val(data['desc_grupo'])
        $("#exampleModal").modal('show');
      }
    })
  })
  $(".actualiza").click(function(){
    var arreglo=$("#actualizacion").serializeArray();
    $.post("<?php echo URL ?>Grupo/edit/",{arreglo:arreglo},function(data){
      window.location.href="<?php echo URL ?>Grupo/index";
    })
  })
})
</script>
<div class="modal fade" id="Modalinsertar1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Insertando</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-signin" action="" method="post" id="insercion">
                    <input type="text" hidden name="id_grupo" id="id_grupo" value="">
                    <div class="form-group">
                        <input type="text" class="form-control"
                               id="desc_grupo" name="desc_grupo"></input>
                        <label for="desc_grupo">ID</label>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control"
                               id="desc_grupo" name="desc_grupo"></input>
                        <label for="desc_grupo">Numero del Grupo</label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="Modalinsertar1">Guardar</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
  $(".insertar").click(function(){
    var id=$(this).attr('id_grupo');
    $.post("<?php echo URL ?>Grupo/get/"+id_grupo,{},function(data){
      if(data){
        data=JSON.parse(data)
        $("#id_grupo").val(data['id_grupo'])
        $("#desc_grupo").val(data['desc_grupo'])
        $("#Modalinsertar1").modal('show');
      }
    })
  })
  $(".insertar").click(function(){
    var arreglo=$("#insercion").serializeArray();
    $.post("<?php echo URL ?>Grupo/insertar/",{arreglo:arreglo},function(data){
    //  window.location.href="<?php echo URL ?>Grupo/index";
    })
  })
})
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $(".pdf").click(function(){
    //window.open("<?php echo URL?>Grupo/printgrupo");
    window.location.href="<?php echo URL?>Grupo/printgrupo";
    })
  })
</script>
