<br>
<br>
<br>
<br>
<br>
<br>
<?php
    if ($datos[2]->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
                            {
                                $acentargrupo="";
                                while ($row = $datos[2]->fetch_array(MYSQLI_ASSOC)) 
                                {
                                    $acentargrupo .=" <option value='".$row['id_grupo']."'>".$row['desc_grupo']."</option>"; //concatenamos el los options para luego ser insertado en el HTML
                                }

                            } 
?>
<?php
    if ($datos[1]->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
                            {
                                $acentarmateria="";
                                while ($row = $datos[1]->fetch_array(MYSQLI_ASSOC)) 
                                {
                                    $acentarmateria .=" <option value='".$row['id_materia']."'>".$row['desc_materia']."</option>"; //concatenamos el los options para luego ser insertado en el HTML
                                }
                            } 
?>
<?php
    if ($datos[3]->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
                            {
                                $acentarunidad="";
                                while ($row = $datos[3]->fetch_array(MYSQLI_ASSOC)) 
                                {
                                    $acentarunidad .=" <option value='".$row['id_unidad']."'>".$row['desc_unidad']."</option>"; //concatenamos el los options para luego ser insertado en el HTML
                                }
                            } 
?>
<?php
    if ($datos[4]->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
                            {
                                $acentarsemestre="";
                                while ($row = $datos[4]->fetch_array(MYSQLI_ASSOC)) 
                                {
                                    $acentarsemestre .=" <option value='".$row['id_semestre']."'>".$row['descripcion']."</option>"; //concatenamos el los options para luego ser insertado en el HTML
                                }
                            } 
?>
<center>
<form id="form-reg" class="" action="<?php echo URL ?>acentar/guardar" method="post">
<div class="container">
  <div class="row">
    <div class="col-">
      <select name="id_semestre"  class="form-control">
        <option Selected value="0" >Semestre</option>
        <?php echo $acentarsemestre; ?>
      </select>
    </div>
      <div class="col-">
          <select name="id_materia"  class="form-control">
              <option Selected value="0" >Grupo</option>
              <?php echo $acentargrupo; ?>
          </select>
      </div>
  </div>
    <div class="container">
        <div class="row">
    <div class="col-">
      <select name="id_materia"  class="form-control">
        <option Selected value="0" >Materia</option>
        <?php echo $acentarmateria; ?>
      </select>
    </div>

    <div class="col-">
      <select name="id_materia"  class="form-control">
        <option Selected value="0" >Unidad</option>
        <?php echo $acentarunidad; ?>
      </select>
    </div>
    </div>
    </div>

 </form>
</center>
<div class="container">
<!-- <?php
    // if(mysqli_num_rows($datos)>0){
  ?> -->
  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <h3 align="center" style="color: ##563d7c">Calificaciones para Aplicaciones web</h3>
        <th scope="col">Alumno</th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col">Calificacion</th>
        <th scope="col"></th>
        <th scope="col">Acentar Calificacion</th>
      </tr>
    </thead>
    <tbody>
       <?php
              while ($fila=mysqli_fetch_assoc($datos[5]))
              {
          ?>
                  <tr>
                      <td scope="col"><?php echo $fila['ap_p']." ".$fila['ap_m']." ".$fila['nombre'] ?></td>
                      <td scope="col"></td>
                      <td scope="col"></td>
                      <!-- <td><?php echo $row[0]?></td> -->
                      <!-- <td><?php echo $row[2]?></td>
                      <td><?php echo $row[3]?></td>
                      <td><?php echo $row[1]?></td> -->
                      <!-- <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td> -->
                      <th scope="col"><input type="text" name="calificacion" id="calificacion" class="form-control input-sm" placeholder="Calificacion" required="true"></th>
                      <th></th>
                      <th scope="col"><button class="btn btn-success editar" id="<?php echo $fila['id_usuario'] ?>">Acentar</button> </th>
                      <th scope="col"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                              Editar
                          </button></th>
                      
                  </tr>
          <?php
              }
          ?>
          
    </tbody>
  </table>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">editando..</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    if ($datos[6]->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
                    {
                        $modificarpersona="";
                        while ($row = $datos[6]->fetch_array(MYSQLI_ASSOC))
                        {
                            $modificarpersona .=" <option value='".$row['id_usuario']."'>".$row['ap_p']." ".$row['ap_m']." ".$row['nombre']."</option>"; //concatenamos el los options para luego ser insertado en el HTML
                        }

                    }
                    ?>
                    <?php
                    if ($datos[7]->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
                    {
                        $modificarmateria="";
                        while ($row = $datos[7]->fetch_array(MYSQLI_ASSOC))
                        {
                            $modificarmateria .=" <option value='".$row['id_materia']."'>".$row['desc_materia']."</option>"; //concatenamos el los options para luego ser insertado en el HTML
                        }
                    }
                    ?>
                    <?php
                    if ($datos[8]->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
                    {
                        $modificarunidad="";
                        while ($row = $datos[8]->fetch_array(MYSQLI_ASSOC))
                        {
                            $modificarunidad .=" <option value='".$row['id_unidad']."'>".$row['desc_unidad']."</option>"; //concatenamos el los options para luego ser insertado en el HTML
                        }
                    }
                    ?>
                    <form id="form-reg" class="" action="<?php echo URL ?>acentar/guardar" method="post">
                        <div class="container" style="margin-top:5em;">
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <div class="container">
                                        <div class="row centered-form">
                                            <div class="">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading text-center">
                                                        <h3 class="panel-title"><i><b>Modificar Calificacion</b></i></h3><br>
                                                    </div>
                                                    <div class="panel-body">
                                                        <form role="form">
                                                            <!-- <div class="row"> -->
                                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                                <div class="form-group">
                                                                    <select name="id_materia"  class="form-control">
                                                                        <option Selected value="0" >Materia</option>
                                                                        <?php echo $modificarmateria; ?>
                                                                    </select>

                                                                </div>
                                                            </div>

                                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                                <div class="form-group">
                                                                    <select name="id_persona"  class="form-control">
                                                                        <option Selected value="0" >Alumno</option>
                                                                        <?php echo $modificarpersona; ?>
                                                                    </select>

                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                                <div class="form-group">
                                                                    <select name="id_unidad"  class="form-control">
                                                                        <option Selected value="0" >Unidad</option>
                                                                        <?php echo $modificarunidad; ?>
                                                                    </select>

                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                                <div class="form-group">
                                                                    <input type="text" name="calificacion" id="calificacion" class="form-control input-sm" placeholder="Calificacion" required="true">
                                                                </div>

                                                            </div>
                                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                                <div class="form-group align center">
                                                                    <input type="submit" value="Modificar" class="btn btn-success">
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="col-md-4"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <script type="text/javascript">

                        $("#Login").click(function()
                        {
                            $("#form-reg").submit();
                        });

                        //validaciones del formulario
                        jQuery.validator.addMethod("texto", function(value)
                        {
                            return /^[a-záéóóúàèìíòùäëïöüñ.\s]+$/i.test(value);
                        });

                        $("#form-reg").validate({
                            errorClass:"invalid",
                            rules:
                                {
                                    Calificacion:
                                        {
                                            required:true,
                                            number:true,
                                        },
                                },
                            messages:
                                {
                                    Calificacion:
                                        {
                                            required:"Se requiere una calificacion",
                                            number:"**SOLO SE ACEPTAN NUMEROS**"
                                        },
                                },
                        });

                    </script>
            </div>
        </div>
    </div>
<script type="text/javascript">
  $(document).ready(function(){
    $(".editar").click(function(){
      var id=$(this).attr('id');
      $.post("<?php echo URL ?>ver/get/"+id,{},function(data){
        if(data){
          data=JSON.parse(data)
          $("#nombre").val(data['nombre'])
          $("#app").val(data['ap_p'])
          $("#apm").val(data['ap_m'])
          $("#myModal").modal('show');
        }
      })
    })
  })
</script>
<!-- <?php
    if ($datos[0]->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
                            {
                                $acentarpersona="";
                                while ($row = $datos[0]->fetch_array(MYSQLI_ASSOC)) 
                                {
                                    $acentarpersona .=" <option value='".$row['id_persona']."'>".$row['ap_p']." ".$row['ap_m']." ".$row['nombre']."</option>"; //concatenamos el los options para luego ser insertado en el HTML
                                }

                            } 
?>
<?php
    if ($datos[1]->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
                            {
                                $acentarmateria="";
                                while ($row = $datos[1]->fetch_array(MYSQLI_ASSOC)) 
                                {
                                    $acentarmateria .=" <option value='".$row['id_materia']."'>".$row['desc_materia']."</option>"; //concatenamos el los options para luego ser insertado en el HTML
                                }
                            } 
?>
<?php
    if ($datos[3]->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
                            {
                                $acentarunidad="";
                                while ($row = $datos[3]->fetch_array(MYSQLI_ASSOC)) 
                                {
                                    $acentarunidad .=" <option value='".$row['id_unidad']."'>".$row['desc_unidad']."</option>"; //concatenamos el los options para luego ser insertado en el HTML
                                }
                            } 
?>
<form id="form-reg" class="" action="<?php echo URL ?>acentar/guardar" method="post">
<div class="container" style="margin-top:5em;">
  <div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
    <div class="container">
      <div class="row centered-form">
      <div class="">
        <div class="panel panel-default">
          <div class="panel-heading text-center">
            <h3 class="panel-title">Acentar Calificaciones</h3>
          </div>
          <div class="panel-body">
            <form role="form">
                 <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                    <input type="text" name="calificacion" id="calificacion" class="form-control input-sm" placeholder="Calificacion" required="true">
                  </div>
                
                 </div>
                <!-- <div class="row"> --             
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <select name="id_materia"  class="form-control">
                            <option Selected value="0" >Materia</option>
                            <?php echo $acentarmateria; ?>
                       </select>

                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <select name="id_persona"  class="form-control">
                            <option Selected value="0" >Alumno</option>
                            <?php echo $acentarpersona; ?>
                       </select>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <select name="id_unidad"  class="form-control">
                            <option Selected value="0" >Unidad</option>
                            <?php echo $acentarunidad; ?>
                       </select>

                    </div>
                </div>
                
              <input type="submit" value="Acentar Calificacion" class="btn">

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
    <div>
  <div class="col-md-4"></div>
      </div>
</div>
</div>
</form>
<script type="text/javascript">

        $("#Login").click(function()
        {
            $("#form-reg").submit();
        });

        //validaciones del formulario
        jQuery.validator.addMethod("texto", function(value)
        {
            return /^[a-záéóóúàèìíòùäëïöüñ.\s]+$/i.test(value);
        });

        $("#form-reg").validate({
            errorClass:"invalid",
            rules:
                {
                    Calificacion:
                        {
                            required:true,
                            number:true,
                        },
                },
            messages:
                {
                    Calificacion:
                        {
                            required:"Se requiere una calificacion",
                            number:"**SOLO SE ACEPTAN NUMEROS**"
                        },
                },
        });

    </script> -->