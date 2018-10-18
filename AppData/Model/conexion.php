<?php
namespace AppData\Model;
class conexion
{
    private $datos=array("server"=>"localhost","user"=>"root","password"=>"", "base"=>"calificaciones");
    private $conexion;

    function __construct()
    {
        $this->conexion=new \mysqli($this->datos["server"],$this->datos["user"], $this->datos["password"],$this->datos["base"]);
        $this->conexion->set_charset("utf8");
    }
    public function QuerySimple($sql)
    {
        $this->conexion->query($sql) or die (mysqli_error($this->conexion));
    }
    public function QueryResultado($sql)
    {
        $datos=$this->conexion->query($sql) or die (mysqli_error($this->conexion));
        return $datos;
    }

    public function __destruct()
    {
        $this->conexion->close();
    }
}
<<<<<<< HEAD
=======

>>>>>>> 8bc6fc3f5e27a7b4918688dfdd5b80d52b5fe3e2
?>
