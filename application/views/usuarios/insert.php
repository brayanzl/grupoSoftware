<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            
            
            <!-------------------- CONTENEDOR ------------------------->
            
            <div class="card mb-4">
                <h5 class="card-header">Registro de Usuario</h5>
                <!-- Account -->

                <hr class="my-0" />
                <div class="card-body">
                    <form id="formAccountSettings" method="POST" action="<?php echo base_url() . 'Usuarios/guardar'; ?>" enctype="multipart/form-data">
                        <div class="row">

                            <div class="mb-3 col-md-6">
                                <label for="firstName" class="form-label">Nombres</label>
                                <input class="form-control" type="text" name="nombres" placeholder="Ingrese su nombre" id="nombres" autofocus />
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="lastName" class="form-label">Apellido Paterno</label>
                                <input class="form-control" type="text" name="apellidoPaterno" placeholder="Ingrese su Apelldo Paterno" id="apellidoPaterno" />
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="email" class="form-label">Apellido Materno</label>
                                <input class="form-control" type="text" name="apellidoMaterno" placeholder="Ingrese su Apelldo Materno" />
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="html5-date-input" class="form-label">Fecha de Nacimiento</label>
                                <input type="date" class="form-control" id="organization" name="fechaNacimiento" />
                            </div>

                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="phoneNumber">Numero de Telefono</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text">BO (+591)</span>
                                    <input type="text" id="phoneNumber" name="telefono" class="form-control" placeholder="202 555 0111" />
                                </div>
                            </div>

                            <div class="mb-3 col-md-6">

                                <label for="address" class="form-label">Carnet</label>
                                <input type="text" class="form-control" name="carnet" placeholder="00000000" maxlength="8" id="carnet"/>

                            </div>



                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="country">Sexo</label>
                                <select id="country" class="select2 form-select" name="sexo">

                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>

                                </select>
                            </div>

                            <div class="mb-3 col-md-6">
                                <label class="form-label">USUARIO</label>
                                <div class="input-group">

                                    <input type="text" class="form-control" name="login" id="login" readonly/>
                                    <button class="btn btn-outline-primary" type="button" id="button-addon2" onClick="confirma()" name="generar">Generar</button>

                                </div>
                            </div>


                            <div class="mb-3 col-md-6">
                                <label for="language" class="form-label">Rol</label>
                                <select id="language" class="select2 form-select" name="rol">

                                    <option value="Administrador">Administrador</option>
                                    <option value="Secretaria">Secretaria</option>

                                </select>
                            </div>

                            <div class="mb-3 col-md-6">

                                <label for="address" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="password" readonly />

                            </div>

                            <!-------------------GENERAR USUARIO-------------------->
                            <script type="text/javascript">
                                var baseurl = "<?php echo base_url(); ?>";
                                function confirma() {
                                    //alert("Hola desde el boton");


                                    var nombres = document.getElementById('nombres');
                                    
                                    var apellidoPaterno = document.getElementById('apellidoPaterno');
                                    var carnet = document.getElementById('carnet');

                                    var nombres1 = nombres.value;
                                    var apellidoPaterno1 = apellidoPaterno.value;
                                    var carnet1 = carnet.value;
                                    


                                    var elUser = document.getElementById('login');
                                    var usuario = nombres1.trim().toLowerCase().substr(0, 1) + carnet1.trim()//TRIM elimina los espacios TOLOWERCASE convierte a minusculas SUBSTR para agarrar cuantos caracteres como un array

                                    elUser.value = usuario;

                                    var passwordUsuario = document.getElementById('password');

                                    //var psw=password.value;
                                    var psw = carnet1;
                                    passwordUsuario.value = psw;
                                    //alert(passwordUsuario);

                                }
                            </script>


                            <!--------------------------------------->





                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2">Guardar</button>
                            <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                        </div>
                    </form>
                </div>
                <!-- /Account -->
            </div>





            <!----------------------/ CONTENEDOR ---------------------->
            
        </div>
        
    </div>
    <!-- / Content -->