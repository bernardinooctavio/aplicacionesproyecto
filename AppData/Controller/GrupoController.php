<?php
  namespace AppData\Controller;
  use AppData\Model\Grupo;
  class GrupoController
  {
    private $grupo;
    function __construct()
    {
      $this->grupo=new Grupo();
    }

    function index()
    {
      echo "hola";
      $datos=$this->grupo->getGrupo();
      return $datos;
    }

		function eliminar($id_grupo){
			$this->grupo->set("id_grupo",$id_grupo[0]);
			$this->grupo->delete();
			?>
			<script type="text/javascript">
				$(document).ready(function(){
					swal({
						title: "Listo",
						text: "Eliminado",
						timer: 2000
					});
					setTimeout(function(){
						window.location.href="<?php echo URL ?>Grupo/index"
					},2100);
				})
			</script>
			<?php
		}
    function get($id_grupo){
      $this->grupo->set("id_grupo",$id_grupo);
      $datos=$this->grupo->getOne();
      if(mysqli_num_rows($datos)>0){
        $datos=mysqli_fetch_assoc($datos);
      }
      echo json_encode($datos);
    }
    function edit(){
			$data=$_POST['arreglo'];
			$this->grupo->set("id_grupo",$data[0]['value']);
			$this->grupo->set("desc_grupo",$data[1]['value']);
			$this->grupo->updateGrupo();
      ?>
      <script type="text/javascript">
        $(document).ready(function(){
          swal({
            title: "Listo !!!!",
            text: "Editado Correctamente",
            timer: 2000
          });
          setTimeout(function(){
            window.location.href="<?php echo URL ?>Grupo/index"
          },2100);
        })
      </script>
      <?php
		}
    function insertar($id_grupo){
			$this->grupo->set("id_grupo",$id_grupo[0]);
      $this->grupo->set("dsc_grupo",$desc_grupo[1]);
			$this->grupo->insert();
			?>
			<script type="text/javascript">
				$(document).ready(function(){
					swal({
						title: "Listo",
						text: "Dato(s) Insertado(s)",
						timer: 2000
					});
					setTimeout(function(){
				//		window.location.href="<?php echo URL ?>Grupo/index"
					},2100);
				})
			</script>
			<?php
		}
    function printgrupo(){
$datos=$this->grupo->getGrupo();
return $datos;

    }
    function __destruct()
    {

    }
  }

 ?>
