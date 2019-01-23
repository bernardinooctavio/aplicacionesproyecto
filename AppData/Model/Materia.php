<?php
    namespace AppData\Model;
    class Materia
      {
        private $id,$desc_materia,$no_unidades;
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
        public function getAsignamateria(){
          $sql="SELECT p.nombre, p.ap_p, p.ap_m, m.desc_materia, g.desc_grupo
           FROM persona p, materias m, grupos g, asigna_mat a,usuario u
           WHERE p.id_usuario=u.id_usuario
           AND u.id_tipo_usuario=2
           AND p.id_persona=a.id_persona
           AND m.id_materia=a.id_materia
           AND g.id_grupo=a.id_grupo 
          ORDER BY p.ap_p ASC";
          echo $sql;
          $datos=$this->conexion->QueryResultado($sql);
          return $datos;

        }
        public function delete(){
  			$sql="DELETE FROM materias
  			WHERE id_materia='{$this->id[0]}'";
  			$this->conexion->QuerySimple($sql);
  		}
      public function updateMateria(){
  $sql="UPDATE materias SET desc_materia='{$this->desc_materia}',no_unidades='{$this->no_unidades}' WHERE id_materia='$this->id'";
  $this->conexion->QuerySimple($sql);
  }
      }

 ?>
