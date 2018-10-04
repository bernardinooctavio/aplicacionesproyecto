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
      }
    }
  }

 ?>
