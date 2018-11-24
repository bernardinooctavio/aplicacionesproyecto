<?php
  namespace AppData\Controller;
  use AppData\Model\Materia;
  class MateriaController
  {
    private $materia;
    function __construct()
    {
      $this->materia=new Materia();
    }
    function index()
    {
      echo "materias";
      $datos=$this->materia->getMateria();
      return $datos;
    }
    function eliminar($id){
			$this->materia->set("id",$id[0]);
			$this->materia->delete();
			?>
			<script type="text/javascript">
				$(document).ready(function(){
					swal({
						title: "Listo",
						text: "Eliminado",
						timer: 2000
					});
					setTimeout(function(){
						window.location.href="<?php echo URL ?>Materia/index"
					},2100);
				})
			</script>
			<?php
		}
    function get($id){
      $this->materia->set("id",$id);
      $datos=$this->materia->getOne();
      if(mysqli_num_rows($datos)>0){
        $datos=mysqli_fetch_assoc($datos);
      }
      echo json_encode($datos);
    }
    function edit(){
			$data=$_POST['arreglo'];
			$this->materia->set("id",$data[0]['value']);
			$this->materia->set("desc_grupo",$data[1]['value']);
			$this->materia->set("no_unidades",$data[2]['value']);
			$this->materia->updateGrupo();
      ?>
      <script type="text/javascript">
        $(document).ready(function(){
          swal({
            title: "Success Listo !!!!",
            text: "Eliminado correctamente",
            timer: 2000
          });
          setTimeout(function(){
            window.location.href="<?php echo URL ?>Materia/index"
          },2100);
        })
      </script>
      <?php
		}
    function printmateria(){
$datos=$this->materia->getMateria();
return $datos;

    }
    function __destruct()
    {

    }
  }

 ?>
