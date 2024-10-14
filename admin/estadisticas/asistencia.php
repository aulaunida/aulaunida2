<?php
include ('../../app/config.php');
include ('../../admin/layout/parte1.php');
include ('../../app/controllers/usuarios/listado_de_usuarios.php');

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <br>
    <div class="content">
        <div class="container">
                <div class="row">
                    <h1>Informes</h1>
                </div>
                <br>
                <div class="row">
                <div class="col-md-12">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Gráficos</h3>
                    </div>
                <div class="card-body">  
                    <div class="card-header">
                        <h3 class="card-title">Control de asistencias</h3>
                    </div>
                    <div class="card-body">
                        <canvas id="myBarChart" width="400" height="200"></canvas>
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-md-12">
                        <<div class="form-group text-center">
                        <a href="<?=APP_URL;?>/admin/index.php" class="btn btn-danger">Volver</a>
                        </div>
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
include ('../../admin/layout/parte2.php');
include ('../../layout/mensajes.php');
?>