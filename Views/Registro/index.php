<div class="container" style="margin-top:5em;">
  <br>
  <br>
  <div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
    <div class="container">
      <div class="row centered-form">
      <div class="">
        <div class="panel panel-default">
          <div class="panel-heading text-center">
            <h3 class="panel-title">Bienvenido Por Favor Registrese</h3>
          </div>
          <div class="panel-body">
            <form role="form" action="<?php echo URL ?>Registro/guardar">
              <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <input type="text" name="nombre" id="nombre" class="form-control input-sm" placeholder="Nombre">
                </div>
              </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                    <input type="text" name="ap_p" id="ap_p" class="form-control input-sm" placeholder="Apellido Paterno">
                  </div>
                  <div class="form-group">
                    <input type="text" name="ap_m" id="ap_m" class="form-control input-sm" placeholder="Apellido Materno">
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <input type="text" name="edad" id="edad" class="form-control input-sm" placeholder="Edad">
                </div>
                </div>
              </div>
              <div class="">
              <select class="form-control input-sm" name="Sexo">
                <option value="">Selecciona</option>
                <option value="1">Femenino</option>
                <option value="2">Masculino</option>
              </select>
            </div><br>
              <div class="">
              <select class="form-control input-sm" name="tipo_usuario">
                <option value="">Selecciona</option>
                <option value="1">Alumno</option>
                <option value="2">Docente</option>
                <option value="3">Jefe</option>
              </select>
            </div><br>
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
                  </div>
                </div>
              </div>

              <input type="submit" value="Registrar" class="btn btn-lg btn-primary btn-block">

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="col-md-4"></div>
</div>
</div>
