<?php
namespace AppData\Controller;
use AppData\Model\Registro;

class LoginController
{
  private $registro;
  function __construct()
  {
    $this->registro=new Registro();
  }
  function index()
  {

  }
  function __destruct()
  {

  }
}

 ?>
