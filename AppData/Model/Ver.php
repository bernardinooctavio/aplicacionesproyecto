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
        public function get2(){
        }
        public function getAlumns(){
        
            //consulta
            $sql="SELECT c.calificacion,p.id_persona,u.id_usuario, p.nombre, p.ap_p, p.ap_m
            FROM calificaciones c,persona p, usuario u
            WHERE p.id_persona=u.id_usuario
            AND u.id_tipo_usuario
            AND p.id_persona=c.id_persona
            ORDER BY p.ap_p ASC";
            $datos=$this->conexion->QueryResultado($sql);
            return $datos;
        }
        public function delete() {
            //echo $this->id;
            $sql="DELETE FROM usuario
      WHERE id_usuario='{$this->id[0]}'";
            $this->conexion->QuerySimple($sql);
            $sql="DELETE FROM persona
      WHERE id_usuario='{$this->id[0]}'";
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
        public function getcal(){
            $sql="SELECT c.calificacion, p.id_persona, u.id_usuario, p.nombre, p.ap_p, p.ap_m
       FROM calificaciones c, persona p, usuario u
       WHERE p.id_persona=u.id_usuario
       AND u.id_tipo_usuario= 1
        AND p.id_persona=c.id_persona
        ORDER BY p.ap_p ASC";
            // $sql="SELECT u.id_usuario, p.nombre, p.ap_p, p.ap_m FROM persona p, usuario u WHERE p.id_usuario=u.id_usuario AND u.id_tipo_usuario=1 ORDER by p.ap_p ASC";
            // echo $sql;
            $datos=$this->conexion->QueryResultado($sql);
            return $datos;
        }

        public function getmateria(){
            $sql="SELECT p.nombre, p.ap_p, p.ap_m, m.desc_materia, g.desc_grupo
       FROM persona p, materias m, grupos g, asigna_mat a
       WHERE p.id_persona=a.id_persona
        AND m.id_materia=a.id_materia
        AND g.id_grupo=a.id_grupo
        AND p.id_usuario=14";
            $datos=$this->conexion->QueryResultado($sql);
            return $datos;
        }
        public function getgrupo(){
            $sql="SELECT p.nombre, p.ap_p, p.ap_m, m.desc_materia, g.desc_grupo
      FROM persona p, materias m, grupos g, asigna_mat a
      WHERE p.id_persona=a.id_persona
      AND m.id_materia=a.id_materia
      AND g.id_grupo=a.id_grupo
      AND p.id_usuario=14";
            $datos=$this->conexion->QueryResultado($sql);
            return $datos;
        }
        public function getmaestro(){
            $sql="SELECT p.nombre, p.ap_p, p.ap_m, m.desc_materia, g.desc_grupo
       FROM persona p, materias m, grupos g, asigna_mat a
       WHERE p.id_persona=a.id_persona
        AND m.id_materia=a.id_materia
        AND g.id_grupo=a.id_grupo
        AND p.id_usuario=14";
            $datos=$this->conexion->QueryResultado($sql);
            return $datos;
        }
        public function getuni(){
            $sql="SELECT  m.desc_materia, m.no_unidades
      from materias m,asigna_mat a, persona p, grupos g
       WHERE m.id_materia=a.id_materia
       AND p.id_persona=a.id_persona
        AND g.id_grupo=a.id_grupo";
            $datos=$this->conexion->QueryResultado($sql);
            return $datos;
        }
        public function getcali(){
            // $sql="SELECT c.calificacion FROM calificaciones c, persona p WHERE p.id_persona=c.id_persona ";
            // $sql="SELECT u.id_usuario, p.nombre, p.ap_p, p.ap_m FROM persona p, usuario u WHERE p.id_usuario=u.id_usuario AND u.id_tipo_usuario=1 ORDER by p.ap_p ASC";
            // echo $sql;
            $datos=$this->conexion->QueryResultado($sql);
            return $datos;
        }






    }
    ?>
