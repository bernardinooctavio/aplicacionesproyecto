<?php
  namespace AppData\Controller;
  use AppData\Model\Grupo;
  class GrupoController
  {
    private $grupo;
    function __construct()
    {
      $this->grupo=new Grupo();
    }
    
    function index()
    {
      echo "hola";
      $datos=$this->grupo->getGrupo();
      return $datos;
    }
    function __destruct()
    {

    }
  }

 ?>
