<?php
    namespace AppData\Model;
    class Materia
      {
        private $conexion;
        //private $nombre, $contraseña;
        public function __construct()
        {
            $this->conexion= new conexion();
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
        public function getMateria(){
          $sql="SELECT m.id_materia,m.desc_materia,m.no_unidades
          FROM materias m
          ORDER BY m.id_materia ASC";
          echo $sql;
          $datos=$this->conexion->QueryResultado($sql);
          return $datos;

        }
      }

 ?>
