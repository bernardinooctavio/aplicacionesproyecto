<?php
namespace AppData\Controller;
use AppData\Model\Acentar;
class acentarController{
	private $acentar;
	function __construct(){
		$this->acentar=new Acentar();
	}
	function index(){
		// $datos[0]=$this->acentar->getacentarpersona();
		$datos[1]=$this->acentar->getacentarmateria();
		$datos[2]=$this->acentar->getacentargrupo();
		$datos[3]=$this->acentar->getacentarunidad();
		$datos[4]=$this->acentar->getacentarsemestre();
		$datos[5]=$this->acentar->getAlumns();
        $datos[6]=$this->acentar->getmodificarpersona();
        $datos[7]=$this->acentar->getmodificarmateria();
        $datos[8]=$this->acentar->getmodificarunidad();
		return $datos;
	}

function get($id){
	$this->acentar->set("id",$id);
	$datos=$this->acentar->getone();
	// return $datos;
	if(mysqli_num_rows($datos)>0){
		$datos=mysqli_fetch_assoc($datos);
	}
	echo json_encode($datos);
	// return $datos;
}
	public function guardar()
	{
		if (isset($_POST))
		{
			$this->acentar->set("calificacion",$_POST['calificacion']);
			$this->acentar->set("id_persona",$_POST['id_persona']);
			$this->acentar->set("id_materia",$_POST['id_materia']);
			$this->acentar->set("id_unidad",$_POST['id_unidad']);
			$this->acentar->set("id_usuario",$_POST['id_usuario']);
			$this->acentar->guardar();
			?>

			<script type="text/javascript">
			swal({
                    title: "Califiacacion Agregada Correctamente",
                    position: "center",
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    allowEnterKey: false,
                    showConfirmButton: false,
                    showCancelButton: false,
                    timer: 3000
                });
				window.location.href="<?php echo URL?>acentar";
			</script>
			<?php
		}
	}


	function __destruct(){

	}
}
