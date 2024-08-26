<?php
$id_grado = $_GET['id'];
include('../../app/config.php');
include('../../admin/layout/parte1.php');

include('../../app/controllers/grados/datos_grados.php');
include('../../app/controllers/niveles/listado_de_niveles.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <br>
    <div class="content">
        <div class="container">
            <div class="row">
                <h1>Modificar grado: <?=$curso;?></h1>
            </div>
            <br>
            <div class="row">

                <div class="col-md-12">
                    <div class="card card-outline card-success">
                        <div class="card-header">
                            <h3 class="card-title">Complete los siguientes datos:</h3>
                        </div>
                        <div class="card-body">
                            <form action="<?=APP_URL;?>/app/controllers/grados/update.php" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Nivel</label>
                                            <input type="text" name="id_grado" value="<?=$id_grado;?>" hidden>
                                            <select name="nivel_id" id="" class="form-control">
                                                <?php
                                                foreach ($niveles as $nivele){
                                                ?>
                                                    <option value="<?=$nivele['id_nivel'];?>"<?=$nivel_id==$nivele['id_nivel'] ? 'selected' : ''?>><?=$nivele['nivel']." - ".$nivele['turno'];?></option>
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
                                                <option value="INICIAL - PRIMERO"<?=$curso=='INICIAL - PRIMERO' ? 'selected' : ''?>>INICIAL - PRIMERO</option>
                                                <option value="INICIAL - SEGUNDO"<?=$curso=='INICIAL - SEGUNDO' ? 'selected' : ''?>>INICIAL - SEGUNDO</option>
                                                <option value="PRIMARIA - PRIMERO"<?=$curso=='PRIMARIA - PRIMERO' ? 'selected' : ''?>>PRIMARIA - PRIMERO</option>
                                                <option value="PRIMARIA - SEGUNDO"<?=$curso=='PRIMARIA - SEGUNDO' ? 'selected' : ''?>>PRIMARIA - SEGUNDO</option>
                                                <option value="PRIMARIA - TERCERO"<?=$curso=='PRIMARIA - TERCERO' ? 'selected' : ''?>>PRIMARIA - TERCERO</option>
                                                <option value="PRIMARIA - CUARTO"<?=$curso=='PRIMARIA - CUARTO' ? 'selected' : ''?>>PRIMARIA - CUARTO</option>
                                                <option value="PRIMARIA - QUINTO"<?=$curso=='PRIMARIA - QUINTO' ? 'selected' : ''?>>PRIMARIA - QUINTO</option>
                                                <option value="PRIMARIA - SEXTO"<?=$curso=='PRIMARIA - SEXTO' ? 'selected' : ''?>>PRIMARIA - SEXTO</option>
                                                <option value="SECUNDARIA - PRIMERO"<?=$curso=='SECUNDARIA - PRIMERO' ? 'selected' : ''?>>SECUNDARIA - PRIMERO</option>
                                                <option value="SECUNDARIA - SEGUNDO"<?=$curso=='SECUNDARIA - SEGUNDO' ? 'selected' : ''?>>SECUNDARIA - SEGUNDO</option>
                                                <option value="SECUNDARIA - TERCERO"<?=$curso=='SECUNDARIA - TERCERO' ? 'selected' : ''?>>SECUNDARIA - TERCERO</option>
                                                <option value="SECUNDARIA - CUARTO"<?=$curso=='SECUNDARIA - CUARTO' ? 'selected' : ''?>>SECUNDARIA - CUARTO</option>
                                                <option value="SECUNDARIA - QUINTO"<?=$curso=='SECUNDARIA - QUINTO' ? 'selected' : ''?>>SECUNDARIA - QUINTO</option>
                                                <option value="SECUNDARIA - SEXTO"<?=$curso=='SECUNDARIA - SEXTO' ? 'selected' : ''?>>SECUNDARIA - SEXTO</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">División</label>
                                            <select name="paralelo" id="" class="form-control">
                                                <option value="A"<?=$paralelo=='A' ? 'selected' : ''?>>A</option>
                                                <option value="B"<?=$paralelo=='B' ? 'selected' : ''?>>B</option>
                                                <option value="C"<?=$paralelo=='C' ? 'selected' : ''?>>C</option>
                                                <option value="D"<?=$paralelo=='D' ? 'selected' : ''?>>D</option>
                                                <option value="E"<?=$paralelo=='E' ? 'selected' : ''?>>E</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success">Actualizar</button>
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
