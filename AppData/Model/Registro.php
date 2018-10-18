<?php
    namespace AppData\Model;
    class Registro
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
        public function registrar()
        {

        }
        public public function guardar()
        {
          $sql="INSERT INTO persona(nombre,ap_p,ap_m,edad,id_sexo,id_tipo_usuario)"
          this->conexion->QuerySimple($sql);
       }
      }
 ?>
