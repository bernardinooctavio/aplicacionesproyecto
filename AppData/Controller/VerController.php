<?php
  namespace AppData\Controller;
  use AppData\Model\Ver;
  class VerController
  {
      private $ver;
      function __construct(){
          $this->ver=new ver();

      }
      function index($id){
        $this->ver->set("id",$id);
        $datos[0]=mysqli_fetch_assoc($this->ver->getData());
        $datos[1]=$this->ver->getAlumnsh();
        $datos[2]=$this->ver->getmati();
        return $datos;
      }
      function indx()
      {
        // $datos[0]=mysqli_fetch_assoc($this->ver->getData());
        $datos[1]=$this->ver->getcal();
        return $datos;
      }
      function ver(){
      }

      function select(){
        $datos=$this->ver->getMateriash();
        return $datos;

      }
      function eliminar($id){
          $this->ver->set("id",$id[0]);
          $this->ver->delete();
          ?>
          <script type="text/javascript">

              $(document).ready(function(){
                  swal({
                          title: "Alumno Eliminado",
                          text: "Intende de nuevo",
                          type: "warning",
                          closeOnConfirm: false,
                          closeOnCancel: true,
                          showCancelButton: true,
                          confirmButtonClass: "btn-danger",
                      },
                      function(isConfirm){
                          if(isConfirm)
                              window.location.href = "<?php echo URL ?>Ver";
                      }
                  );
              })
              //alert("usuario no registrado");window.location.href="<?php echo URL.'Login' ?>";
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
          $this->ver->set("nombre",$data[1]['value']);
          $this->ver->set("ap_p",$data[2]['value']);
          $this->ver->set("ap_m",$data[3]['value']);
          $this->ver->set("edad",$data[4]['value']);
          $this->ver->updatePer();
          ?>
          <script type="text/javascript">

          </script>
          <?php
      }

      public function getMat(){
          $sql="SELECT * FROM materias";
          $datos=$this->conexion->QueryResultado($sql);
          return $datos;
      }
      function printacentarver()
      {
          $datos[0] = $this->ver->getmateria();

          $datos[1] = $this->ver->getgrupo();

          $datos[2] = $this->ver->getmaestro();

          $datos[3] = $this->ver->getuni();

          $datos[5] = $this->ver->getAlumns();

          $datos[6] = $this->ver->getcal();

          return $datos;
      }

          function __destruct(){

      }
  }
