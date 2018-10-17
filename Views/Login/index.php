<div class="container" style="margin-top:5em;">
  <br>
  <br>
  <div class="row">
  <div class="col-md-4">
  </div>
  <div class="col-md-4">
    <form class="form-signin">

      <script type="text/javascript" src="../js/jquery-1.9.1.js"></script>
      <script type="text/javascript" src="../js/jquery.validate.js"></script>
      <script type="text/javascript" src="../js/jquery.validate.min.js"></script>
  <h1 class="h3 mb-3 font-weight-normal text-center">Iniciar Sesion</h1>
  <label for="inputEmail" class="sr-only">Usuario</label>
  <input type="email" id="inputEmail" class="form-control" placeholder="usuario" required="" autofocus="">
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required="">
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me">Recordar Contraseña
    </label>
  </div>
        <button type="submit" name="login-submit" tabindex="6" class="btn btn-info btn-block" href="<?php echo URL; ?>" id="entrar">Entrar</button>
</form>
  </div>
  <div class="col-md-4">
  </div>
</div>
  <script>
var = expr = /^[a-zA-Z0-9\.\-]+@[a-zA-9\-]+\.[a-zA-Z0-9\-\.]+$/;

$(document).ready(function(){
$("#Entrar").click(function(){
	var correo = $("#inputemail").val();
  var nombre =$("#inputPassword").val();




if(correo =="" || !expr.test(correo)){
alert("ingresa un correo valido porfavor").fadeIn();
return false;
}

if(password == ""){

	alert("Por favor, llena este campo.").fadeIn();
	return false;
}

});
});
</script>
</div>

