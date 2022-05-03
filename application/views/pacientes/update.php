<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            
            
            <!-------------------- CONTENEDOR ------------------------->
            
            <div class="card mb-4">
                <h5 class="card-header">Registro de Pacientes</h5>
                <!-- Account -->

                <hr class="my-0" />
                <div class="card-body">
                    <form id="formAccountSettings" method="POST" action="<?php echo base_url() . 'Pacientes/update'; ?>" enctype="multipart/form-data">
                    <input type="hidden" class="form-control" name="idPacientes"  value="<?php echo $paciente['idPacientes'];?>" readonly>
                    <input type="hidden"  name="idUsuarios"  value="<?php echo $this->session->userdata('idUsuarios');?>"><!--PARA RECUPERAR IDUSUARIO-->    
                        <div class="row">

                            <div class="mb-3 col-md-6">
                                <label for="firstName" class="form-label">Nombres</label>
                                <input class="form-control" type="text" name="nombres" value="<?php echo $paciente['nombres'] ?>" autofocus />
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="lastName" class="form-label">Apellido Paterno</label>
                                <input class="form-control" type="text" name="apellidoPaterno"  value="<?php echo $paciente['apellidoPaterno'] ?>"/>
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="email" class="form-label">Apellido Materno</label>
                                <input class="form-control" type="text" name="apellidoMaterno" value="<?php echo $paciente['apellidoMaterno'] ?>" />
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="html5-date-input" class="form-label">Fecha de Nacimiento</label>
                                <input type="date" class="form-control" name="fechaNacimiento" value="<?php echo $paciente['fechaNacimiento'] ?>" />
                            </div>

                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="phoneNumber">Numero de Telefono</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text">BO (+591)</span>
                                    <input type="text" id="phoneNumber" name="telefono" class="form-control" placeholder="202 555 0111" value="<?php echo $paciente['telefono'] ?>"/>
                                </div>
                            </div>

                            <div class="mb-3 col-md-6">

                                <label for="address" class="form-label">Carnet</label>
                                <input type="text" class="form-control" name="carnet"  maxlength="8" value="<?php echo $paciente['carnet'] ?>"/>

                            </div>



                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="country">Sexo</label>
                                <select class="select2 form-select" name="sexo" value="<?php echo $paciente['sexo'] ?>">

                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>

                                </select>
                            </div>
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