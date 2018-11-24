<?php

    namespace AppData\Model;
    class Grupo

      {
        //private $nombre, $contraseña;

        private $id_grupo,$desc_grupo,$conexion;
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
      public function delete(){
			$sql="DELETE FROM grupos
			WHERE id_grupo='{$this->id_grupo[0]}'";
			$this->conexion->QuerySimple($sql);
		}
    public function updateGrupo(){
      $sql="UPDATE grupos SET desc_grupo='$this->desc_grupo' WHERE                                                                                                       id_grupo='$this->id_grupo'";
      $this->conexion->QuerySimple($sql);
    }

    function insert(){
    //$sql= "INSERT INTO grupos(desc_grupo) VALUES('desc_grupo')";
  //  $sql "INSERT INTO grupos ('desc_grupo) VALUES ('desc_grupo')";
  //$sql="INSERT INTO grupos (id_grupo,dec_grupos) VALUES ('$id_grupo[0]','$desc_grupo[0]')";
  $sql="INSERT INTO grupos (id_grupo,desc_grupo) VALUES ('.$id_grupo.','.$desc_grupo.')";
         $this->conexion->QuerySimple($sql);

    }
      }

 ?>
