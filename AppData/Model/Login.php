<?php
namespace AppData\Model;
class Login
{
    private $tabla="usuarios";
    private $email, $pass;
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
        $sql="SELECT * FROM {$this->tabla} where email='{$this->email}' and pass='{$this->pass}'";
        //print_r($sql);
        $dato=$this->conexion->QueryResultado($sql);
        return $dato;
    }
}