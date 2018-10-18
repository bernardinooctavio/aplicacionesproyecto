<<<<<<< HEAD
<?php
  namespace AppData\Controller;
  use AppData\Model\Login;
  class loginController
  {
    private $login;
    function __construct()
    {
      $this->login=new Login();
    }
    function index()
    {

    }
    public function verify()
    {
      if (isset($_POST))
      {
        $this->login->set("usuario",$_POST["usuario"]);
        $this->login->set("contraseña",$_POST["contraseña"]);
        $datos=$this->login->verify();
        if (mysql_num_rows($datos)>0)
        {
            $datos=mysqli_fetch_assoc($datos);
            $_SESSION["nombre"]=$datos["nombre"]."".$datos["ap_p"]."".$datos["ap_m"];
        }
        else
        {
          $_SESSION["error_login"]="los datos no coinciden con nuestros registros";

        }
        ?>
        <script type="text/javascript">
        windows.location.href="<?php echo URL?>";
        </script>
        <?php
        public public function guardar()
        {
            $this->registrar->set("usuario",$_POST["usuario"]);
        }
      }
    }
  }

 ?>
=======
<?php namespace AppData\Controller;
use AppData\Model\Login;
class LoginController
{
    private $login;

    function __construct(){
      $this->login=new Login();

    }
    function index() {

    }
    public function verify(){
   	if(isset($_POST)){
    	$this->login->set("usuario",$_POST["usuario"]);
			$this->login->set("contraseña",$_POST["contraseña"]);
			$datos=$this->login->verify();
			if(mysqli_num_rows($datos) > 0) {
				$datos=mysqli_fetch_assoc($datos);
				$_SESSION["nombre"]=$datos["nombre"]." ".$datos["ap_p"]." ".$datos["ap_p"];
			}else{
					$_SESSION["error_login"]="los datos no coinciden cn nuestros registros";
				}?>
				<script type="text/javascript">
				window.location.href="<?php echo URL ?>";
				</script>
				<?php
		}
    }
    public function logout(){
			session_destroy();
		}
    public function registar(){

    }
    public function guardar(){

      if(isset($_POST)){
        $this->login->set("nombre",$_POST['nombre']);
        $this->login->set("ap_p",$_POST['ap_p']);
        $this->login->set("ap_m",$_POST['ap_m']);
        $this->login->set("edad",$_POST['edad']);
        $this->login->set("id_sexo",$_POST['id_sexo']);
        $this->login->set("id_tipo_usuario",$_POST['id_tipo_usuario']);
        $this->login->set("nickname",$_POST['nickname']);
        $this->login->set("password",$_POST['password']);
        $this->login->guardar();

        ?>
        <script type="text/javascript">
		  swal({
                    title: "Agregado correctamente",
                    showCancelButton: true,
                    confirmButtonText: "Confirm",
                    confirmButtonColor: "#00ff99",
                });
        window.location.href = "<?php echo URL ?>Login";
        //alert("entro")
        </script>
        <?php

      }
    }
		function __destruct(){

		}
}
?>
>>>>>>> 8bc6fc3f5e27a7b4918688dfdd5b80d52b5fe3e2
