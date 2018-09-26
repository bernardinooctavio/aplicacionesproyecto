<?php
    namespace AppData\Model;
    class Asignar
      {
        function __construct()
        {

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
      }
 ?>
