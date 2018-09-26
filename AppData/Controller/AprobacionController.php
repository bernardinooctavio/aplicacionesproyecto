<?php
  namespace AppData\Controller;
  use AppData\Model\Aprobacion;
  class AprobacionController
  {
    private $aprobacion;
    function __construct()
    {
      $this->aprobacion=new Aprobacion();
    }
    function index()
    {

    }
    function __destruct()
    {

    }
  }

 ?>
