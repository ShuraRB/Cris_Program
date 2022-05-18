<?= $this->extend("plantillas/panel_base") ?>

<!-- CSS -->
<?= $this->section("css") ?>
    
<?= $this->endSection(); ?>

<!-- CONTENIDO -->
<?= $this->section("contenido") ?>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <!--  -->
            <div class="header">
                <h2>
                    Registar usuario
                    <small>Todos los campos marcados con (<font color="red">*</font>) son obligatorios</small>
                </h2>
            </div>
            <!--  -->
            <div class="body">
                <form class="" action="" >
                    <div class="row">
                        <div class="col-md-12">
                            <center>
                                <img src="<?= base_url(CONTENIDO_IMAGENES.'usuario.jpg');?>" alt="" id="" height="150px;">
                            </center>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-4">
                            <label for="nombres">Nombre(s) (<font color="red">*</font>)</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">person</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" class="form-control " placeholder="Escribe tu(s) nombre(s)">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="nombres">Apellido paterno (<font color="red">*</font>)</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">person</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" class="form-control " placeholder="Escribe tu apellido paterno">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="nombres">Apellido materno (<font color="red">*</font>)</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">person</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" class="form-control " placeholder="Escribe tu apellido materno">
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <label for="nombres">Sexo (<font color="red">*</font>)</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">person</i>
                                </span>
                                <input name="sexo" type="radio" id="dama">
                                <label for="dama">Dama</label><br>
                                <input name="sexo" type="radio" id="caballero" />
                                <label for="caballero">Caballero</label>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="nombres">Correo electrónico (<font color="red">*</font>)</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">person</i>
                                </span>
                                <div class="form-line">
                                    <input type="email" class="form-control " placeholder="Escribe tu correo electrónico">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="nombres">Password (<font color="red">*</font>)</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">person</i>
                                </span>
                                <div class="form-line">
                                    <input type="password" class="form-control " placeholder="Escribe tu correo contraseña">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="nombres">Repetir password (<font color="red">*</font>)</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">person</i>
                                </span>
                                <div class="form-line">
                                    <input type="password" class="form-control " placeholder="Repite tu contraseña">
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <label for="nombres">Imagen para el perfil </label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">person</i>
                                </span>
                                <div class="form-line">
                                    <input type="file" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="button" class="btn btn-primary m-t-15 waves-effect">Registrar</button>
                    <a type="button" href="<?= route_to('usuarios');?>" class="btn btn-warning m-t-15 waves-effect">Cancelar</a>
                </form>
            </div>  
        </div>  
    </div>
<?= $this->endSection(); ?>

<!-- JS -->
<?= $this->section("js") ?>

<?= $this->endSection(); ?>
