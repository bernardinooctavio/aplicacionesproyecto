<?php
  namespace AppData\Controller;
  use AppData\Model\Home;
  class HomeController
  {
    private $home;
    function __construct()
    {
      $this->home=new Home();
    }
    function index()
    {

    }
    function __destruct()
    {

    }
  }

 ?>
