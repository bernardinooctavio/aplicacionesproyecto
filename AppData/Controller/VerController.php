<?php
  namespace AppData\Controller;
  use AppData\Model\Ver;
  class VerController
  {
      private $ver;
      function __construct(){
          $this->ver=new Ver();
      }
      function index(){
          $datos=$this->ver->getAlumns();
          return $datos;

      }
      function ver(){

      }
      function eliminar(){
          $this->calificaciones->set("id",$id);
          $this->calificaciones->delete();
          ?>
          <script type="text/javascript">

          </script>
          <?php
      }
      function edit(){
          $data=$_POST['arreglo'];
          $this->calificaciones->set("id",$data[0]['value']);
          $this->calificaciones->set("nombre",$data[1]['value']);
          $this->calificaciones->set("ap_p",$data[2]['value']);
          $this->calificaciones->set("ap_m",$data[3]['value']);
          $this->calificaciones->set("edad",$data[4]['value']);
          $this->calificaciones->updatePer();
          ?>
          <script type="text/javascript">

          </script>
          <?php
      }
      function __destruct(){

      }
  }