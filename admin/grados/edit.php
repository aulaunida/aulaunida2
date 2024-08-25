<?php
include ('../../app/config.php');
include ('../../admin/layout/parte1.php');

include ('../../app/controllers/niveles/listado_de_niveles.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <br>
    <div class="content">
        <div class="container">
            <div class="row">
                <h1>Registro de nuevo grado</h1>
            </div>
            <br>
            <div class="row">

                <div class="col-md-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Complete los siguientes datos:</h3>
                        </div>
                        <div class="card-body">
                            <form action="<?=APP_URL;?>/app/controllers/grados/create.php" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Nivel</label>
                                            <select name="nivel_id" id="" class="form-control">
                                                <?php
                                                foreach ($niveles as $nivele){
                                                ?>
                                                    <option value="<?=$nivele['id_nivel'];?>"><?=$nivele['nivel']." - ".$nivele['turno'];?></option>
                                                    <?php
                                                } 
                                                ?>
                                                
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Curso</label>
                                            <select name="curso" id="" class="form-control">
                                                <option value="INICIAL - PRIMERO">INICIAL - PRIMERO</option>
                                                <option value="INICIAL - SEGUNDO">INICIAL - SEGUNDO</option>
                                                <option value="PRIMARIA - PRIMERO">PRIMARIA - PRIMERO</option>
                                                <option value="PRIMARIA - SEGUNDO">PRIMARIA - SEGUNDO</option>
                                                <option value="PRIMARIA - TERCERO">PRIMARIA - TERCERO</option>
                                                <option value="PRIMARIA - CUARTO">PRIMARIA - CUARTO</option>
                                                <option value="PRIMARIA - QUINTO">PRIMARIA - QUINTO</option>
                                                <option value="PRIMARIA - SEXTO">PRIMARIA - SEXTO</option>
                                                <option value="SECUNDARIA - PRIMERO">SECUNDARIA - PRIMERO</option>
                                                <option value="SECUNDARIA - SEGUNDO">SECUNDARIA - SEGUNDO</option>
                                                <option value="SECUNDARIA - TERCERO">SECUNDARIA - TERCERO</option>
                                                <option value="SECUNDARIA - CUARTO">SECUNDARIA - CUARTO</option>
                                                <option value="SECUNDARIA - QUINTO">SECUNDARIA - QUINTO</option>
                                                <option value="SECUNDARIA - SEXTO">SECUNDARIA - SEXTO</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">División</label>
                                            <select name="paralelo" id="" class="form-control">
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Registrar</button>
                                            <a href="<?=APP_URL;?>/admin/grados" class="btn btn-secondary">Cancelar</a>
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
