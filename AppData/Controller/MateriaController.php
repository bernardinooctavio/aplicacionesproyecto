<?php
  namespace AppData\Controller;
  use AppData\Model\Materia;
  class MateriaController
  {
    private $materia;
    function __construct()
    {
      $this->materia=new Materia();
    }
    function index()
    {
      echo "materias";
      $datos=$this->materia->getMateria();
      return $datos;
    }
    function __destruct()
    {

    }
  }

 ?>
