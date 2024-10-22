<?php
include ('../../app/config.php');
include ('../../admin/layout/parte1.php');

include ('../../app/controllers/configuraciones/gestion/listado_de_gestiones.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <br>
    <div class="content">
        <div class="container">
            <div class="row">
            <h2 style="margin-left: 20px;"><i class="bi bi-plus-square"></i>  Registrar ciclo lectivo  </h2>
            </div>
            <br>
            <div class="row">

                <div class="col-md-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Complete los siguientes campos:</h3>
                        </div>
                        <div class="card-body">
                            <form action="<?=APP_URL;?>/app/controllers/niveles/create.php" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Ciclo lectivo<b style="color:red">*</b></label>
                                            <select name="gestion_id" id="" class="form-control">
                                                <?php
                                                foreach ($gestiones as $gestione){
                                                   if($gestione['estado']=="1"){ ?>
                                                       <option value="<?=$gestione['id_gestion'];?>"><?=$gestione['gestion'];?></option>
                                                       <?php
                                                   } ?>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Niveles<b style="color:red">*</b></label>
                                            <select name="nivel" id="" class="form-control">
                                                <option value="INICIAL">INICIAL</option>
                                                <option value="PRIMARIA">PRIMARIA</option>
                                                <option value="SECUNDARIA">SECUNDARIA</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Turnos<b style="color:red">*</b></label>
                                            <select name="turno" id="" class="form-control">
                                                <option value="MAÑANA">MAÑANA</option>
                                                <option value="TARDE">TARDE</option>
                                                <option value="NOCHE">NOCHE</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Registrar</button>
                                            <a href="<?=APP_URL;?>/admin/niveles" class="btn btn-danger">Cancelar</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
