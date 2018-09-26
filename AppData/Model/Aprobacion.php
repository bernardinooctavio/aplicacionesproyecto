<?php
    namespace AppData\Model;
    class Aprobacion
      {
        private $nombre, $contraseña;
        public function __construct()
        {
            //$this->conexion= new conexion();
        }
        public function set($atributo,$valor)
        {
          $this->$atributo=$valor;
        }
        public function get($atributo)
        {
          return $this->$atributo;
        }
        public function getOne()
        {

        }
        public function index(){

        }
      }

 ?>
