<form id="form-reg" class="" action="<?php echo URL ?>login/guardar" method="post">
    <script type="text/javascript" src="../js/jquery-1.9.1.js"></script>
  <script type="text/javascript" src="../js/jquery.validate.js"></script>
  <script type="text/javascript" src="../js/jquery.validate.min.js"></script>
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
            <h3 class="panel-title">Bienvenidos Por Favor Registrese</h3>
          </div>
          <div class="panel-body">
            <form role="form">
              <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    <input type="text" name="nombre" id="nombre" class="form-control input-sm" placeholder="nombre">
                  </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    <input type="text" name="ap_p" id="ap_p" class="form-control input-sm" placeholder="apellido paterno">
                  </div>
                </div>
              </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="ap_m" id="ap_m" class="form-control input-sm" placeholder="apellido materno">
                        </div>
                    </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="text" name="edad" id="edad" class="form-control input-sm" placeholder="edad">
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <select class="form-control" placeholder="tipo" name="id_sexo">
                            <option value="1">Femenino</option>
                            <option value="2">Masculino</option>
                        </select>

                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <select class="form-control" placeholder="tipo" name="id_tipo_usuario">
                            <option value="1">Alumno</option>
                            <option value="2">Docente</option>
                            <option value="3">Jefe de divicion</option>
                        </select>
                    </div>
                </div>
                 </div>


              <div class="form-group">
                <input type="email" name="nickname" id="nickname" class="form-control input-sm" placeholder="Email Address">
              </div>


                  <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
                  </div>


              <input type="submit" value="guardar" class="btn btn-info btn-block">

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
  <script>
var = expr = /^[a-zA-Z0-9\.\-]+@[a-zA-9\-]+\.[a-zA-Z0-9\-\.]+$/;


$(document).ready(function(){
$("#guardar").click(function(){
var nombre =$("#inputnombre").val();
	var apellido paterno = $("#ap_p").val();
  var apellido materno = $("#am_m").val();
  var edad = $("#edad").val();
	var correo = $("#inputemail").val();
  var password =$("#password").val();


if(nombre == ""){
	alert("ingresa un nombre porfavor").fadeIn();
	return false;
}

if(apellido paterno == ""){
	alert("ingresa tu apellido paterno porfavor").fadeIn();
	return false;
}

if(apellido materno == ""){
	alert("ingresa tu apellido materno porfavor").fadeIn();
	return false;
}

if(edad == ""){
	alert("ingresa tu edad porfavor (solo numeros)").fadeIn();
	return false;
}
if(correo =="" || !expr.test(correo)){
alert("ingresa una direccion de correo valida  porfavor").fadeIn();
return false;
}

if(password == ""){
	alert("ingresa tu contraseña porfavor").fadeIn();
	return false;
}



});
});
</script>
</form>
