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

    }
    function __destruct()
    {

    }
  }

 ?>
