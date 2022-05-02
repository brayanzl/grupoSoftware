<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">


            <!-------------------- CONTENEDOR ------------------------->
            <div class="card mb-4">
                <h5 class="card-header">Actualizar los datos del Usuario: <?php echo $usuario['login']; ?> </h5>
                <!-- Account -->
                <!-- < ?php $usuarios = $idUsuarios['idUsuarios'];?>
                <h4 class="card-title">Editar usuario de la persona  < ?php echo $usuarios;?> :</h4> -->

                <hr class="my-0" />
                <div class="card-body">
                    <form id="formAccountSettings" method="POST" action="<?php echo base_url() . 'Usuarios/modificar'; ?>" enctype="multipart/form-data">
                        <div class="row">

                            <div class="mb-3 col-md-6">
                                <label for="firstName" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="password">
                                <input type="hidden" class="form-control" name="idUsuarios" id="idUsuario" value="<?php echo $usuario['idUsuarios']; ?>" readonly>

                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="lastName" class="form-label">Repetir Password</label>
                                <input class="form-control" type="password" name="repetirPassword" id="repetirPassword" />


                            </div>



                            <button class="btn btn-outline-primary" type="button" id="button-addon2" onClick="confirma()" name="generar">Verificar</button>



















                            <!-------------------GENERAR USUARIO-------------------->
                            <script type="text/javascript">
                                var baseurl = "<?php echo base_url(); ?>";

                                function confirma() {
                                    //alert("Hola desde el boton");


                                    var password = document.getElementById('password');
                                    var repetirPassword = document.getElementById('repetirPassword');



                                    var password1 = password.value;
                                    var repetirPassword1 = repetirPassword.value;


                                    if (password1 == repetirPassword1) {
                                        alert("si son iguales");


                                    } else {
                                        alert("datos incorrectos");
                                    }





                                }
                            </script>


                            <!--------------------------------------->





                        </div>
                        <div class="col-md-6">
                            <div class="mt-2 ">
                                <button type="submit" class="btn btn-success">Guardar</button>
                                <button type="reset" class="btn btn-danger">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /Account -->
            </div>
            <!----------------------/ CONTENEDOR ---------------------->

        </div>

    </div>
    <!-- / Content -->