
<?php
session_start();
?>
<nav class="hover navbar navbar-expand-md navbar-dark fixed-top navbar-light" style="background-color: #28ceff;">
    <a class="navbar-brand" href="#">TESVB</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="nave collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto">
            <!--practica empieza-->

            <!--practica empieza-->

            <?php



            if(isset($_SESSION['id_usuario']))
            {
            if (isset($_SESSION['id_tipo_usuario']) AND $_SESSION['id_tipo_usuario']== 1)
            {
                echo "Alumno: ";
                echo $_SESSION['nombre'];
                ?>



                <li class="nav-item dropdown" style="margin-left:1em;">
                    <a class="nav-link   " data-toggle="dropdown" href="#" id="dropdown01" role="button" aria-haspopup="true" aria-expanded="false">Calificaciones</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="<?php echo URL; ?>Ver/index">calificacion</a>
                    </div>

                </li>

                <?php
            }
            else
            if (isset($_SESSION['id_tipo_usuario']) AND $_SESSION['id_tipo_usuario']== 2)
            {
                echo "Docente: ";
                echo $_SESSION['nombre'];
                ?>


                <li class="nav-item dropdown" style="margin-left:1em;">
                    <a class="nav-link   " data-toggle="dropdown" href="#" id="dropdown01" role="button" aria-haspopup="true" aria-expanded="false">Calificaciones</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="<?php echo URL; ?>Ver/index">calificacion</a>
                        <a class="dropdown-item" href="<?php echo URL; ?>Acentar">Acentar</a>
                        <a class="dropdown-item" href="<?php echo URL?>modificar">Modificar</a>
                    </div>
                </li>


                <?php
            }
            else
            if (isset($_SESSION['id_tipo_usuario']) AND $_SESSION['id_tipo_usuario']== 3)
            {
            echo "Jefe de divicion: ";
            echo $_SESSION['nombre'];
            ?>

            <li class="nav-item dropdown" style="margin-left:1em;">
                <a class="nav-link   " data-toggle="dropdown" href="#" id="dropdown01" role="button" aria-haspopup="true" aria-expanded="false">Calificaciones</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="<?php echo URL; ?>Ver/index">calificacion</a>
                </div>

            </li>

            <li class="nav-item dropdown" style="margin-left:1em;">
                <a class="nav-link "  data-toggle="dropdown" href="#" id="dropdown03" role="button" aria-haspopup="true" aria-expanded="false">Reportes</a>
                <div class="dropdown-menu" aria-labelledby="dropdown03">
                    <a class="dropdown-item" href="<?php echo URL; ?>Materia/index">Materias</a>
                    <a class="dropdown-item" href="<?php echo URL; ?>Grupo/index">Grupos</a>
                    <a class="dropdown-item" href="#">Aprobacion</a>
                </div>

                <?php }
                }
                ?>
            </li>

        </ul>

        <form class="form-inline my-2 my-lg-0" style="margin-left:1em;">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>



        <!--de aqui para arriba tienes un desmadre-->

        <!--adentro de este pones otras condiciones iguales para validar que tipo menu quieres para el usuario-->
        <?php if (isset($_SESSION['id_tipo_usuario']))
        {
            ?>
            <form class="form-inline my-2 my-lg-0" style="margin-left:1em;">
                <a class="btn btn-outline-danger" href="<?php echo URL; ?>Login/logout">Salir</a>
            </form>
            <?php
        }
        else
//esta parte es el nav para los que no esten logueados
        {
            ?>
            <form class="form-inline my-2 my-lg-0" style="margin-left:1em;">
                <a class="btn btn-outline-primary" href="<?php echo URL; ?>Login">Login</a>
            </form>
            <form class="form-inline my-2 my-lg-0" style="margin-left:1em;">
                <a class="btn btn-outline-primary" href="<?php echo URL; ?>Login/registrar">Registro</a>
            </form>

            <?php
        }
        ?>

        <script type="text/javascript">
            $('li').click(function() {
                $('li.active').each(function(){
                    // $(this).removeClass('active');

                })

                $(this).addClass('active');


                // common operation

            })

        </script>

    </div>
    </div>
</nav>