<?php
    namespace AppData\Model;
    class Ver
      {
        private $id, $nombre, $ap_p, $ap_m;
        //private $conexion
        public function __construct(){
            $this->conexion= new conexion();
        }
        public function set($atributo,$valor){
            $this->$atributo=$valor;
        }
        public function get($atributo){
            return $this->$atributo;
        }
        public function getAlumns(){
            //consulta
            $sql="SELECT u.id_usuario, p.nombre, p.ap_p, p.ap_m
            FROM persona p, usuario u
            WHERE p.id_usuario=u.id_usuario
            AND u.id_tipo_usuario=1
            ORDER BY p.ap_p ASC";
            $datos=$this->conexion->QueryResultado($sql);
            return $datos;
        }
        public function delete() {
            //echo $this->id;
            $sql="DELETE FROM usuario
      WHERE id_usuario='{$this->id}'";
            $this->conexion->QuerySimple($sql);
            $sql="DELETE FROM persona
      WHERE id_usuario='{$this->id}'";
            $this->conexion->QuerySimple($sql);
            //echo $sql;
        }

        public function getOne(){
            $sql="SELECT u.id_usuario, p.nombre, p.ap_p, p.ap_m
            FROM persona p, usuario u
            WHERE p.id_usuario=u.id_usuario
            AND u.id_tipo_usuario=1
            AND p.id_usuario='{$this->id}'
            ORDER BY p.ap_p ASC";
            $datos=$this->conexion->QueryResultado($sql);
            return $datos;

            echo $sql;
        }

        public function updatePer(){
            $sql="UPDATE persona SET nombre='{$this->nombre}', ap_p='{$this->ap_p}', ap_m='{$this->ap_m}', edad='{$this->edad}' WHERE id_usuario='$this->id'";
            $this->conexion->QuerySimple($sql);
        }
        public function getMat(){
            $sql="SELECT * FROM materias";
            $datos=$this->conexion->QueryResultado($sql);
            return $datos;
        }





    }
    ?>