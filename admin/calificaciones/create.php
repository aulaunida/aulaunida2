<?php

$id_grado_get = $_GET['id_grado'];
$id_docente_get = $_GET['id_docente'];
$id_materia_get = $_GET['id_materia'];
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
                                            <center>Integración</center>
                                        </th>
                                        <th colspan="4">
                                            <center>Primera Etapa</center>
                                        </th>
                                        <th colspan="4">
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
                                            $contador_estudiantes++; ?>
                                            <tr>
                                                
                                                <!-- <td style="text-align: center"><?= $contador_estudiantes; ?></td> -->
                                                <td class="uppercase" style="text-align: center"><input type="text" value="<?=$id_estudiante;?>" name="" id="estudiante_<?=$contador_estudiantes;?>" hidden><?= $estudiante['apellidos'] . ', ' . $estudiante['nombres']; ?></td>
                                                <td class="text-center" style="text-align: center"><?= $estudiante['integracion'] == 'NO' ? "NO" : "SI"; ?></td>
                                                <td>
                                                    <select  id="nota1_<?=$contador_estudiantes ;?>" class="form-control" required>
                                                        <option type="number" value="0" selected>-</option>
                                                        <option type="number" value="100">E</option>
                                                        <option type="number" value="80">MB</option>
                                                        <option type="number" value="60">B</option>
                                                        <option type="number" value="40">S</option>
                                                        <option type="number" value="20">NS</option>
                                                    </select>
                                                </td>
                                                <td> <select id="nota2_<?=$contador_estudiantes ; ?>" class="form-control" required>
                                                        <option type="number" value="0" selected>-</option>
                                                        <option type="number" value="100">E</option>
                                                        <option type="number" value="80">MB</option>
                                                        <option type="number" value="60">B</option>
                                                        <option type="number" value="40">S</option>
                                                        <option type="number" value="20">NS</option>
                                                    </select>
                                                </td>
                                                <td> <select id="nota3_<?=$contador_estudiantes ; ?>" class="form-control" required>
                                                        <option type="number" value="0" selected>-</option>
                                                        <option type="number" value="100">E</option>
                                                        <option type="number" value="80">MB</option>
                                                        <option type="number" value="60">B</option>
                                                        <option type="number" value="40">S</option>
                                                        <option type="number" value="20">NS</option>
                                                    </select>
                                                </td>
                                                <td> <select id="nota4_<?=$contador_estudiantes ; ?>" class="form-control" required>
                                                        <option type="number" value="0" selected>-</option>
                                                        <option type="number" value="100">E</option>
                                                        <option type="number" value="80">MB</option>
                                                        <option type="number" value="60">B</option>
                                                        <option type="number" value="40">S</option>
                                                        <option type="number" value="20">NS</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select  id="nota5_<?=$contador_estudiantes ;?>" class="form-control" required>
                                                        <option type="number" value="0" selected>-</option>
                                                        <option type="number" value="100">E</option>
                                                        <option type="number" value="80">MB</option>
                                                        <option type="number" value="60">B</option>
                                                        <option type="number" value="40">S</option>
                                                        <option type="number" value="20">NS</option>
                                                    </select>
                                                </td>
                                                <td> <select id="nota6_<?=$contador_estudiantes ; ?>" class="form-control" required>
                                                        <option type="number" value="0" selected>-</option>
                                                        <option type="number" value="100">E</option>
                                                        <option type="number" value="80">MB</option>
                                                        <option type="number" value="60">B</option>
                                                        <option type="number" value="40">S</option>
                                                        <option type="number" value="20">NS</option>
                                                    </select>
                                                </td>
                                                <td> <select id="nota7_<?=$contador_estudiantes ; ?>" class="form-control" required>
                                                        <option type="number" value="0" selected>-</option>
                                                        <option type="number" value="100">E</option>
                                                        <option type="number" value="80">MB</option>
                                                        <option type="number" value="60">B</option>
                                                        <option type="number" value="40">S</option>
                                                        <option type="number" value="20">NS</option>
                                                    </select>
                                                </td>
                                                <td> <select id="nota8_<?=$contador_estudiantes ; ?>" class="form-control" required>
                                                        <option type="number" value="0" selected>-</option>
                                                        <option type="number" value="100">E</option>
                                                        <option type="number" value="80">MB</option>
                                                        <option type="number" value="60">B</option>
                                                        <option type="number" value="40">S</option>
                                                        <option type="number" value="20">NS</option>
                                                    </select>
                                                </td>
                                            </tr>
                                    <?php
                                        }
                                    }
                                   $contador_estudiantes;
                                    ?>
                                </tbody>
                            </table>

                            <hr>

                            <div class="row">
                                <div class="col-md-12">

                                    <div class="form-group text-center">
                                        <button class="btn btn-primary" id="btn_guardar">Guardar calificaciones</button>
                                        <script>
                                            $('#btn_guardar').click(function (){
                                            var n = '<?=$contador_estudiantes;?>';
                                            var i = 1;
                                            var id_docente = '<?=$id_docente_get;?>';
                                            var id_materia = '<?=$id_materia_get;?>';

                                            for (i=1; i <= n ; i++){
                                                var a = '#nota1_'+i;
                                                var nota1 = $(a).val();

                                                var b = '#nota2_'+i;
                                                var nota2 = $(b).val();

                                                var c = '#nota3_'+i;
                                                var nota3 = $(c).val();

                                                var d = '#nota4_'+i;
                                                var nota4 = $(d).val();

                                                var e = '#nota5_'+i;
                                                var nota5 = $(e).val();

                                                var f = '#nota6_'+i;
                                                var nota6 = $(f).val();

                                                var g = '#nota7_'+i;
                                                var nota7 = $(g).val();

                                                var h = '#nota8_'+i;
                                                var nota8 = $(h).val();

                                                var k = '#estudiante_'+i;
                                                var id_estudiante = $(k).val();


                                                //alert("id_docente: "+ id_docente + "- id_estudiante: " + id_estudiante + "- id_materia: " + id_materia);
                                                var url = "../../app/controllers/calificaciones/create.php";
                                                $.get(url,{id_docente:id_docente,id_estudiante:id_estudiante,id_materia:id_materia,nota1:nota1,nota2:nota2,nota3:nota3,nota4:nota4,nota5:nota5,nota6:nota6,nota7:nota7,nota8:nota8},function (datos){
                                                    alert("mando las notas");
                                                    $('#respuesta').html(datos);
                                                });
                                            }
                                            });
                                        </script>
                                        <div id="respuesta"></div>
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