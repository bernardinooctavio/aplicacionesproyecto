<?php
    namespace AppData\Model;
    class Grupo
      {
        
        //private $nombre, $contraseña;
        private $conexion;
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
       public function getGrupo(){
          $sql="SELECT g.id_grupo,g.desc_grupo
          FROM grupos g";
          echo $sql;
          $datos=$this->conexion->QueryResultado($sql);
          return $datos;

      }
      }

 ?>
