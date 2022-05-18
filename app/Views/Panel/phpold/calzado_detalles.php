<?= $this->extend("plantillas/panel_base") ?>

<!-- CSS -->
<?= $this->section("css") ?>
<link href="<?= base_url(RECURSOS_PANEL_PLUGINS.'bootstrap-select/css/bootstrap-select.css');?>" rel="stylesheet" />    
<?= $this->endSection(); ?>

<!-- CONTENIDO -->
<?= $this->section("contenido") ?>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <!--  -->
            <div class="header">
                <h2>
                    Detalles calzado
                    <small>Todos los campos marcados con (<font color="red">*</font>) son obligatorios</small>
                </h2>
            </div>
            <!--  -->
            <div class="body">
                <form class="" action="" >
                    <div class="row">
                        <div class="col-md-12">
                            <center>
                                <img src="<?= base_url(CONTENIDO_IMAGENES_CALZADO.'nooknak.jpg');?>" alt="" id="" height="150px;">
                            </center>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-4">
                            <label for="nombres">Marca (<font color="red">*</font>)</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">person</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" class="form-control" value="Nooknak" placeholder="Escribe la marca">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="nombres">Módelo (<font color="red">*</font>)</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">person</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" class="form-control " value="adiddas" placeholder="Escribe el módelo">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="nombres">Color (<font color="red">*</font>)</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">person</i>
                                </span>
                                <div class="form-line">
                                    <input type="color" class="form-control " value="">
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <label for="nombres">Categoría (<font color="red">*</font>)</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">person</i>
                                </span>
                                <input name="sexo" type="radio" id="dama" checked>
                                <label for="dama">Dama</label><br>
                                <input name="sexo" type="radio" id="caballero" />
                                <label for="caballero">Caballero</label>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="nombres">Talla (<font color="red">*</font>)</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">person</i>
                                </span>
                                <div class="form-line">
                                    <select class="form-control show-tick">
                                        <option value="">Selecciona un Genero</option>
                                        <option value="" selected>2</option>
                                        <option value="2.5">2.5</option>
                                        <option value="3">3</option>
                                        <option value="3.5">3.5</option>
                                        <option value="4">4</option>
                                        <option value="4.5">4.5</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="nombres">Precio (<font color="red">*</font>)</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">person</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" class="form-control " placeholder="Escribe el precio" value="1255.00">
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        
                        <div class="col-md-12">
                            <label for="nombres">descripción (<font color="red">*</font>)</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">person</i>
                                </span>
                                <div class="form-line">
                                    <textarea name="" id="" class="form-control" cols="30" rows="5" placeholder="Escribe la descripción aquí...">Suela antideslizante y duradera: nuestra elegante suela está envuelta con goma natural y EVA altamente elástica, lo que la hace suave y cómoda. Más que eso, tiene la propiedad de antideslizante y desgaste. Es una combinación perfecta</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="nombres">Imagen del libro </label>
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

                    <button type="button" class="btn btn-primary m-t-15 waves-effect">Actualizar</button>
                    <a type="button" href="<?= route_to('calzados');?>" class="btn btn-warning m-t-15 waves-effect">Cancelar</a>
                </form>
            </div>  
        </div>  
    </div>
<?= $this->endSection(); ?>

<!-- JS -->
<?= $this->section("js") ?>

<?= $this->endSection(); ?>
