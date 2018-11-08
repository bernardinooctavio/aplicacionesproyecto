<?php
    namespace AppData\Model;
    class Grupo
      {
        //private $nombre, $contraseña;
        private $grupo,$id;
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
			WHERE id_grupo='{$this->id}'";
			$this->conexion->QuerySimple($sql);
		}
    public function updateGrupo(){
$sql="UPDATE grupos SET desc_grupo='{$this->desc_grupo}' WHERE id_grupo='$this->id'";
$this->conexion->QuerySimple($sql);
}
    public function insertar(){
$sql= "INSERT INTO  grupos ('id_grupo', 'desc_grupo') VALUES ('','')";

    }

      }

 ?>

