<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-------------------- CONTENEDOR ------------------------->
            <div class="form-group">
                <a href="<?php echo base_url(); ?>pacientes/insertar/" class="btn btn-info btn-rounded btn-fw">Nuevo Paciente</a>
            </div>
            <div class="card">
                <h5 class="card-header">REGISTRO DE PACIENTES</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombres</th>
                                <th>apellido Paterno</th>
                                <th>apellido Materno</th>
                                <th>Telefono</th>
                                <th>carnet</th>
                                <th>fecha Nacimiento</th>
                                <th>sexo</th>
                                <th>estado</th>
                                <th>fechaRegistro</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <?php $i = 1;
                            foreach ($paciente  as $row) { ?>
                                <tr class="table-default">
                                    <td><i class="fab fa-sketch fa-lg text-warning me-3"></i> <?php echo $i; ?> </td>
                                    <td><?php echo $row['nombres']; ?></td>
                                    <td><?php echo $row['apellidoPaterno']; ?></td>
                                    <td><?php echo $row['apellidoMaterno']; ?></td>
                                    <td><?php echo $row['carnet']; ?></td>
                                    <td><?php echo $row['telefono']; ?></td>
                                    <td><?php echo $row['fechaNacimiento']; ?></td>
                                    <td><?php echo $row['sexo']; ?></td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Modificar</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Eliminar</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php $i++;
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>