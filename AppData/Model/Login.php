<?php
    namespace AppData\Model;
    class Login
      {
        private $nombre, $contraseña;
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
        public function verify()
        {
          $sql="SELECT u.id_usuario,p.nombre,p.ap_p,p.ap_m, u.id_tipo_usuario
                FROM persona p,usuario u,sexo s,id_tipo_usuario tu
                WHERE u.nickname='{$this->usuario}'
                  AND u.password='{$this->contraseña}'
                  AND p.id_usuario=id_usuario
                  AND u.id_tipo_usuario=id_tipo_usuario
                  AND p.id_sexo=s.id_sexo";
        $dato=$this->conexion->QueryResultado($sql);
        return $dato;
        }
        public function index(){

        }
      }

 ?>
