<?php
  namespace AppData\Controller;
  use AppData\Model\Registro;
  class RegistroController
  {
<<<<<<< HEAD
    private $registrar;
    function __construct()
    {
      $this->registrar=new Registro();
=======
    private $registro;
    function __construct()
    {
      $this->registro=new Registro();
>>>>>>> 8bc6fc3f5e27a7b4918688dfdd5b80d52b5fe3e2
    }
    function index()
    {

    }
<<<<<<< HEAD
    public function guardar()
    {
      if (isset($_POST))
      {
        $this->login->set("nombre",$_POST['nombre']);
        $this->login->set("ap_p",$_POST['ap_p']);
        $this->login->set("ap_m",$_POST['ap_m']);
        $this->login->set("edad",$_POST['edad']);
        $this->login->set("id_sexo",$_POST['id_sexo']);
        $this->login->set("id_tipo_usuario",$_POST['id_tipo_usuario'])
        $datos=$this->registra->guardar();
        if (mysql_num_rows($datos)>0)
        {
            $datos=mysqli_fetch_assoc($datos);
            $_SESSION["nombre"]=$datos["nombre"]."".$datos["ap_p"]."".$datos["ap_m"]."".$datos["edad"]."".
            $datos["id_sexo"]."".$datos["id_tipo_usuario"];
        }
        else
        {
          $_SESSION["error_login"]="los datos no coinciden ";

        }
        ?>
        <script type="text/javascript">
        windows.location.href="<?php echo URL?>";
        </script>
        <?php
        public public function guardar()
        {
            $this->registrar->set("nombre",$_POST["nombe"]);
        }
      }
    }
  }
=======
    function __destruct()
    {

    }

  }

>>>>>>> 8bc6fc3f5e27a7b4918688dfdd5b80d52b5fe3e2
 ?>
