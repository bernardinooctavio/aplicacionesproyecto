<?php
  namespace AppData\Controller;
  use AppData\Model\Ver;
  class VerController
  {
    private $ver;
    function __construct()
    {
      $this->ver=new Ver();
    }
    function index()
    {
      echo "hola";
        $datos=$this->ver->getAlumns();
        return $datos;

    }
    function unidad1()
    {
      $datos=$this->ver->getunidad1();
      return $datos;
      
    }
    
    function ver(){

}

function eliminar(){

  $this->calificaciones->set("id",$id);
  $this->calificaciones->delete();

  ?>
  <script type="text/javascript"></script>
  <?php
}
    function __destruct()
    {

    }
  }

 ?>
