<?php
    namespace AppData\Model;
    class Ver
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
          public function getAlumns(){
          $sql="SELECT u.id_usuario,p.nombre_per,p.ap,p.am
          FROM personas p,usuarios u
          WHERE p.id_usuario=u.id_usuario
          AND u.id_tusuario=1
          ORDER BY p.ap ASC";
          echo $sql;
          $datos=$this->conexion->QueryResultado($sql);
          return $datos;

        }
      }
 ?>
