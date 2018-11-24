<?php
    namespace AppData\Model;
    class Ver
      {

	     	private $id,$nombre_per,$ap,$am;
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

          public function getAlumns(){
          $sql="SELECT u.id_usuario,p.nombre_per,p.ap,p.am
          FROM personas p,usuarios u
          WHERE p.id_usuario=u.id_usuario
          AND u.id_tusuario
          ORDER BY p.ap ASC";
          $datos=$this->conexion->QueryResultado($sql);
          return $datos;

        }

        public function getOne(){
    $sql="SELECT u.id_usuario, p.nombre, p.ap, p.am
          FROM personas p, usuarios u
          WHERE p.id_usuario=u.id_usuario
          AND u.id_tusuario=1
          AND p.id_usuario='{$this->id_usuario}'
          ORDER BY p.ap ASC";
    $datos=$this->conexion->QueryResultado($sql);
    return $datos;
  }

        public function getunidad1(){

            $sql=" SELECT calificacion FROM calificaciones ";

            //echo $sql;
            $datos=$this->conexion->QueryResultado($sql);

           // $this->conexion->QuerySimple($sql);
            return $datos;

           // $this->conexion->QuerySimple($sql);


        }
         function delete($id){
			$sql="DELETE FROM usuarios
			WHERE id_usuario='{$this->id}'";
			$this->conexion->QuerySimple($sql);
			$sql="DELETE FROM personas
			WHERE id_usuario='{$this->id}'";
			$this->conexion->QuerySimple($sql);
		}
        public function updatePer(){
    $sql="UPDATE personas SET nombre_per='{$this->nombre_per}', ap='{$this->ap}', am='{$this->am}' WHERE id_usuario='$this->id_usuario'";
    $this->conexion->QuerySimple($sql);
  }
}

 ?>
