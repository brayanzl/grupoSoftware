<script type="text/javascript">
	function eliminar() {
		if (confirm("¿Realmente desea eliminarlo?")) {

		} else {
			return false
		}
	}
</script>



<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">


            <!-------------------- CONTENEDOR ------------------------->
            <div class="form-group">
                <a href="<?php echo base_url(); ?>pacientes/insert/" class="btn btn-info btn-rounded btn-fw">Nuevo paciente</a>
            </div>
            <div class="card">
                <h5 class="card-header">REGISTRO DE PACIENTES</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">

                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombres</th>
                                <th>Telefono</th>
                                <th>carnet</th>
                                <th>Fecha de Nacimiento</th>
                                <th>Acciones</th>

                            </tr>
                        </thead>

                        <tbody class="table-border-bottom-0">
                            <?php $i = 1;
                            foreach ($paciente  as $row) { ?>
                                <tr class="table-default">
                                    <td><i class="fab fa-sketch fa-lg text-warning me-3"></i> <?php echo $i; ?> </td>

                                    <td><?php echo $row['nombres']; ?></td>
                                    <td><?php echo $row['telefono']; ?></td>
                                    <td><?php echo $row['carnet']; ?></td>
                                    <td><?php echo $row['fechaNacimiento']; ?></td>






                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="<?php echo base_url() . 'pacientes/editar/' . $row['idPacientes']; ?>"><i class="bx bx-edit-alt me-1"></i> Modificar</a>
                                                <a class="dropdown-item" href="<?php echo base_url() . 'pacientes/eliminar/' . $row['idPacientes']; ?>" onClick="if(eliminar() == false) return false"><i class="bx bx-trash me-1"></i> Eliminar</a>
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
            <!----------------------/ CONTENEDOR ---------------------->

        </div>

    </div>
    <!-- / Content -->