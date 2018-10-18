<div class="container" style="margin-top:5em;">
  <br>
  <br>
  <div class="row">
  <div class="col-md-4">
  </div>
  <div class="col-md-4">
    <form class="form-signin">
<<<<<<< HEAD
  <h1 class="h3 mb-3 font-weight-normal text-center">Iniciar Sesion</h1>
  <label for="inputtext" class="sr-only">Usuario</label>
  <input type="text" id="inputtext" class="form-control" placeholder="usuario" required="" autofocus="">
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required="">
=======

      <script type="text/javascript" src="../js/jquery-1.9.1.js"></script>
      <script type="text/javascript" src="../js/jquery.validate.js"></script>
      <script type="text/javascript" src="../js/jquery.validate.min.js"></script>
  <h1 class="h3 mb-3 font-weight-normal text-center">Iniciar Sesion</h1>
        <div>
  <label for="inputEmail" class="sr-only">Usuario</label>
  <input type="email" id="inputEmail" class="form-control" placeholder="usuario" required="" autofocus="">
        </div>
        <br>
        <div>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required="">
        </div>
>>>>>>> 8bc6fc3f5e27a7b4918688dfdd5b80d52b5fe3e2
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me">Recordar Contraseña
    </label>
  </div>
<<<<<<< HEAD
  <a class="btn btn-lg btn-primary btn-block"  href="<?php echo URL; ?>Home type="button">Inicio de Sesion</a>
=======
        <button type="submit" name="login-submit" tabindex="6" class="btn btn-info btn-block" href="<?php echo URL; ?>" id="entrar">Entrar</button>
>>>>>>> 8bc6fc3f5e27a7b4918688dfdd5b80d52b5fe3e2
</form>
  </div>
  <div class="col-md-4">
  </div>
</div>
<<<<<<< HEAD
</div>
=======
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

>>>>>>> 8bc6fc3f5e27a7b4918688dfdd5b80d52b5fe3e2
