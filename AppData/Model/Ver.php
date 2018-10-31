<?php
    namespace AppData\Model;
    class Ver
      {
          private $conexion;
        function __construct()
        {
          $this->conexion=new conexion();
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
          AND u.id_tusuario
          ORDER BY p.ap ASC";
          echo $sql;
          $datos=$this->conexion->QueryResultado($sql);
          return $datos;

        }

        public function getunidad1(){
          $sql="SELECT c.id_calificacion,c.id_persona,c.calificacion
          FROM calificaciones c
          WHERE c.id_calificacion=c.id_persona
          AND c.calificacion
          ORDER BY c.id_persona ASC";
          echo $sql;
          $datos=$this->conexion->QueryResultado($sql);
          return $datos;

        }
      }
 ?>
