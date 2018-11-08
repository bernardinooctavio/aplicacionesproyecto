<div class="container " style="margin-top:5em;">
    <br>
    <br>
    <br>
    <div class=" row justify-content-center ">
        <div class="login col-sm-4">
            <h4 class="row justify-content-center ">Inicia Sesion </h4><span class="glyphicon glyphicon-pencil"></span>
            <form class="form-signin" data-toggle="validate" method="post" action="<?php echo URL ?>login/Home" id="form-login">


                <div class="form-group ">
                    <center> <label for="exampleInputEmail1">Usuario</label> </center>
                    <input type="text" class="form-control" placeholder="Nombre de Usuario" id="usuario" name="usuario">

                </div>
                <div class="form-group">
                    <center> <label for="exampleInputPassword1">Contraseña</label> </center>
                    <input type="password" class="form-control"  placeholder="Password" id="contraseña" name="contraseña">
                </div>



                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">


                            <button class="btn btn-info btn-block"  tabindex="6" id="signin" type="submit" id="entrar">Entrar</button>

                        </div>
                    </div>
                </div>

            </form>
        </div>

    </div>

</div>

<script type="text/javascript">

    $("#entrar").click(function()
    {
        $("#form-login").submit();
    });

    //validaciones del formulario
    jQuery.validator.addMethod("texto", function(value)
    {
        return /^[a-záéóóúàèìíòùäëïöüñ.\s]+$/i.test(value);
    });

    $("#form-login").validate({
        errorClass:"invalid",
        rules:
            {
                usuario:
                    {
                        required:true,

                    },
                contraseña:
                    {
                        required:true,

                    },

            },
        messages:
            {
                usuario:
                    {
                        required:"Usuario obligatorio",

                    },
                contraseña:
                    {
                        required:"contraseña obligatoria",

                    },
            },
    });

</script>
