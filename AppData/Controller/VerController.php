<?php
  namespace AppData\Controller;
  use AppData\Model\Ver;
  class VerController
  {

    private $ver;
    function __construct()
    {
      $this->ver=new Ver();
    }
    function index()
    {

      $datos[0]=$this->ver->getAlumns();
      $datos[1]=$this->ver->getunidad1();
      return $datos;

}
    function eliminar($id){

			$this->ver->set("id",$id);
			$this->ver->delete();

			?>
			<script type="text/javascript">
				$(document).ready(function(){
					swal({
						title: "Listo !!!!",
						text: "Se ha eliminado correctamente",
						timer: 2000
					});
					setTimeout(function(){
						window.location.href="<?php echo URL ?>Ver/index"
					},2100);
				})
			</script>
			<?php
		}
		function get($id){
			$this->ver->set("id",$id);
			$datos=$this->ver->getOne();
			if(mysqli_num_rows($datos)>0){
				$datos=mysqli_fetch_assoc($datos);
			}
			echo json_encode($datos);
		}
		function edit(){
			$data=$_POST['arreglo'];
			$this->ver->set("id",$data[0]['value']);
			$this->ver->set("nombre_per",$data[1]['value']);
			$this->ver->set("ap",$data[2]['value']);
			$this->ver->set("am",$data[3]['value']);
			$this->ver->updatePer();
      ?>
      <script type="text/javascript">
        $(document).ready(function(){
          swal({
            title: "Listo !!!!",
            text: "Eliminado correctamente",
            timer: 2000
          });
          setTimeout(function(){
            window.location.href="<?php echo URL ?>Ver/index"
          },2100);
        })
      </script>
      <?php
		}



    function __destruct()
    {

    }
  }

 ?>
