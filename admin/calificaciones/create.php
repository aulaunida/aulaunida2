<?php

$id_grado_get = $_GET['id_grado'];
include('../../app/config.php');
include('../../admin/layout/parte1.php');

include('../../app/controllers/estudiantes/listado_de_estudiantes.php');

$curso = "";
$paralelo = "";

foreach ($estudiantes as $estudiante) {
    if ($id_grado_get == $estudiante['id_grado']) {
        $curso = $estudiante['curso'];
        $paralelo = $estudiante['paralelo'];
    }
}
?>

?>
<style>
    .icono-blanco i {
        color: white;
        /* Cambia el color del icono a blanco */
    }

    .uppercase {
        text-transform: uppercase;
        /* Convierte el texto a mayúsculas */
    }
</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <br>
    <div class="content">
        <div class="container">
            <div class="row">
                <h1>Cargar calificaciones<i class="bi bi-chevron-right"></i><?= $curso ?> - <?= $paralelo; ?></h1>
            </div>
            <br>
            <div class="row">

                <div class="col-md-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Estudiantes registrados</h3>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-striped table-bordered table-hover table-sm">
                                <thead>
                                    <tr>
                                        <th>
                                            <center>Estudiante</center>
                                        </th>
                                        <th>
                                            <center>Nivel</center>
                                        </th>
                                        <th>
                                            <center>Grado</center>
                                        </th>
                                        <th>
                                            <center>Turno</center>
                                        </th>
                                        <th>
                                            <center>Integración</center>
                                        </th>
                                        <th>
                                            <center>Primera Etapa</center>
                                        </th>
                                        <th>
                                            <center>Segunda Etapa</center>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $contador_estudiantes = 0;
                                    foreach ($estudiantes as $estudiante) {
                                        if ($id_grado_get == $estudiante['id_grado']) {
                                            $id_estudiante = $estudiante['id_estudiante'];
                                            $contador_estudiantes = $contador_estudiantes + 1; ?>
                                            <tr>
                                                <!-- <td style="text-align: center"><?= $contador_estudiantes; ?></td> -->
                                                <td class="uppercase" style="text-align: center"><?= $estudiante['apellidos'] . ', ' . $estudiante['nombres']; ?></td>
                                                <td style="text-align: center"><?= $estudiante['nivel']; ?></td>
                                                <td class="uppercase" style="text-align: center"><?= $estudiante['curso'] . ' - ' . $estudiante['paralelo']; ?></td>
                                                <td class="text-center"><?= $estudiante['turno']; ?></td>
                                                <td class="text-center"><?= $estudiante['integracion'] == 'NO' ? "NO" : "SI"; ?></td>
                                                <td>
                                                    <select name="nota1" id="" class="form-control" required>
                                                        <option value="" selected disabled>Seleccione una opción</option>
                                                        <option value="100">Excelente</option>
                                                        <option value="80">Muy bueno</option>
                                                        <option value="60">Bueno</option>
                                                        <option value="40">Satisfactorio</option>
                                                        <option value="20">No satisfactorio</option>
                                                    </select>
                                                </td>
                                                <td> <select name="nota2" id="" class="form-control" required>
                                                        <option value="" selected disabled>Seleccione una opción</option>
                                                        <option value="100">Excelente</option>
                                                        <option value="80">Muy bueno</option>
                                                        <option value="60">Bueno</option>
                                                        <option value="40">Satisfactorio</option>
                                                        <option value="20">No satisfactorio</option>
                                                    </select></td>
                                            </tr>
                                    <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>

                            <hr>

                            <div class="row">
                                <div class="col-md-12">

                                    <div class="form-group text-center">
                                        <button class="btn btn-primary">Guardar calificaciones</button>
                                        <a href="<?= APP_URL; ?>/admin/calificaciones" class="btn btn-danger">Volver</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php

include('../../admin/layout/parte2.php');
include('../../layout/mensajes.php');

?>

<script>
    $(function() {
        $("#example1").DataTable({
            "pageLength": 25,
            "language": {
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ - _END_ | _TOTAL_ estudiantes",
                "infoEmpty": "Mostrando 0 - 0 | 0 estudiantes",
                "infoFiltered": "(Filtrado de _MAX_ total estudiantes)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ estudiantes",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar estudiante:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
            "responsive": true,
            "lengthChange": true,
            "autoWidth": false,
            buttons: [{
                    extend: 'collection',
                    text: 'Reportes',
                    orientation: 'landscape',
                    buttons: [{
                        text: 'Copiar Texto',
                        extend: 'copy',
                    }, {
                        text: 'Descargar en PDF',
                        extend: 'pdf'
                    }, {
                        text: 'Descargar en CSV',
                        extend: 'csv'
                    }, {
                        text: 'Descargar en Excel',
                        extend: 'excel'
                    }, {
                        text: 'Imprimir Reporte',
                        extend: 'print'
                    }]
                },
                {
                    extend: 'colvis',
                    text: 'Visor de columnas',
                    collectionLayout: 'fixed three-column'
                }
            ],
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>