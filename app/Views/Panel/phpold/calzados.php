<?= $this->extend("plantillas/panel_base") ?>

<!-- CSS -->
<?= $this->section("css") ?>
    <!-- JQuery DataTable Css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.11.4/datatables.min.css"/>
 

<?= $this->endSection(); ?>

<!-- CONTENIDO -->
<?= $this->section("contenido") ?>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <!--  -->
            <div class="header">
                <h2>
                    Todos los libros<br><br>
                    <a type="button" href="<?= route_to('nuevo_calzado');?>" class="btn btn-primary waves-effect"><i class="material-icons">add_circle</i>  Agregar Libro</a>
                </h2>
            </div>
            <!--  -->
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="tabla-calzados">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Imagen</th>
                                <th>Titulo Libro</th>
                                <th>Genero</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'forastera.jpg'); ?>" alt="" height="150px"></td>
                                <td>Forastera</td>
                                <td>Drama</td>
                                <td>
                                    <a type="button" href="<?= route_to('calzado_detalles',1);?>" class="btn btn-warning waves-effect"><i class="material-icons">info</i> Detalles</a>
                                    <a type="button" href="<?= route_to('dashboard',1);?>" class="btn btn-danger waves-effect"><i class="material-icons">delete</i> Eliminar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'purpura.jpg'); ?>" alt="" height="150px"></td>
                                <td>El Color Púrpura</td>
                                <td>Drama</td>
                                <td>
                                    <a type="button" href="<?= route_to('calzado_detalles',2);?>" class="btn btn-warning waves-effect"><i class="material-icons">info</i> Detalles</a>
                                    <a type="button" href="<?= route_to('dashboard',2);?>" class="btn btn-danger waves-effect"><i class="material-icons">delete</i> Eliminar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'angeles.jpg'); ?>" alt="" height="150px"></td>
                                <td>Donde habitan los ángeles</td>
                                <td>Drama</td>
                                <td>
                                    <a type="button" href="<?= route_to('calzado_detalles',2);?>" class="btn btn-warning waves-effect"><i class="material-icons">info</i> Detalles</a>
                                    <a type="button" href="<?= route_to('dashboard',2);?>" class="btn btn-danger waves-effect"><i class="material-icons">delete</i> Eliminar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'psicoanalista.jpg'); ?>" alt="" height="150px"></td>
                                <td>El Psicoanalista</td>
                                <td>Suspenso</td>
                                <td>
                                    <a type="button" href="<?= route_to('calzado_detalles',2);?>" class="btn btn-warning waves-effect"><i class="material-icons">info</i> Detalles</a>
                                    <a type="button" href="<?= route_to('dashboard',2);?>" class="btn btn-danger waves-effect"><i class="material-icons">delete</i> Eliminar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'silencio.jpg'); ?>" alt="" height="150px"></td>
                                <td>El Silencio de los Corderos</td>
                                <td>Suspenso</td>
                                <td>
                                    <a type="button" href="<?= route_to('calzado_detalles',2);?>" class="btn btn-warning waves-effect"><i class="material-icons">info</i> Detalles</a>
                                    <a type="button" href="<?= route_to('dashboard',2);?>" class="btn btn-danger waves-effect"><i class="material-icons">delete</i> Eliminar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'codigo.jpg'); ?>" alt="" height="150px"></td>
                                <td>El Código Da Vinci</td>
                                <td>Suspenso</td>
                                <td>
                                    <a type="button" href="<?= route_to('calzado_detalles',2);?>" class="btn btn-warning waves-effect"><i class="material-icons">info</i> Detalles</a>
                                    <a type="button" href="<?= route_to('dashboard',2);?>" class="btn btn-danger waves-effect"><i class="material-icons">delete</i> Eliminar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'Puente.jpg'); ?>" alt="" height="150px"></td>
                                <td>Los puentes de Madison</td>
                                <td>Romantico</td>
                                <td>
                                    <a type="button" href="<?= route_to('calzado_detalles',2);?>" class="btn btn-warning waves-effect"><i class="material-icons">info</i> Detalles</a>
                                    <a type="button" href="<?= route_to('dashboard',2);?>" class="btn btn-danger waves-effect"><i class="material-icons">delete</i> Eliminar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'Colera.jpg'); ?>" alt="" height="150px"></td>
                                <td>El amor en los tiempos de cólera</td>
                                <td>Romantico</td>
                                <td>
                                    <a type="button" href="<?= route_to('calzado_detalles',2);?>" class="btn btn-warning waves-effect"><i class="material-icons">info</i> Detalles</a>
                                    <a type="button" href="<?= route_to('dashboard',2);?>" class="btn btn-danger waves-effect"><i class="material-icons">delete</i> Eliminar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'metros.jpg'); ?>" alt="" height="150px"></td>
                                <td>A dos metros de ti</td>
                                <td>Romantico</td>
                                <td>
                                    <a type="button" href="<?= route_to('calzado_detalles',2);?>" class="btn btn-warning waves-effect"><i class="material-icons">info</i> Detalles</a>
                                    <a type="button" href="<?= route_to('dashboard',2);?>" class="btn btn-danger waves-effect"><i class="material-icons">delete</i> Eliminar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'anillo.jpg'); ?>" alt="" height="150px"></td>
                                <td>El señor de los anillos</td>
                                <td>Fantasía</td>
                                <td>
                                    <a type="button" href="<?= route_to('calzado_detalles',2);?>" class="btn btn-warning waves-effect"><i class="material-icons">info</i> Detalles</a>
                                    <a type="button" href="<?= route_to('dashboard',2);?>" class="btn btn-danger waves-effect"><i class="material-icons">delete</i> Eliminar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'novel.jpg'); ?>" alt="" height="150px"></td>
                                <td>Mushoku Tensei</td>
                                <td>Fantasía</td>
                                <td>
                                    <a type="button" href="<?= route_to('calzado_detalles',2);?>" class="btn btn-warning waves-effect"><i class="material-icons">info</i> Detalles</a>
                                    <a type="button" href="<?= route_to('dashboard',2);?>" class="btn btn-danger waves-effect"><i class="material-icons">delete</i> Eliminar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'harry.jpg'); ?>" alt="" height="150px"></td>
                                <td>Harry Potter Saga</td>
                                <td>Fantasía</td>
                                <td>
                                    <a type="button" href="<?= route_to('calzado_detalles',2);?>" class="btn btn-warning waves-effect"><i class="material-icons">info</i> Detalles</a>
                                    <a type="button" href="<?= route_to('dashboard',2);?>" class="btn btn-danger waves-effect"><i class="material-icons">delete</i> Eliminar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'cuentos.jpg'); ?>" alt="" height="150px"></td>
                                <td>Recopilación de Cuentos Issac Asimov</td>
                                <td>Ciencia_Ficción</td>
                                <td>
                                    <a type="button" href="<?= route_to('calzado_detalles',2);?>" class="btn btn-warning waves-effect"><i class="material-icons">info</i> Detalles</a>
                                    <a type="button" href="<?= route_to('dashboard',2);?>" class="btn btn-danger waves-effect"><i class="material-icons">delete</i> Eliminar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'fantasmas.jpg'); ?>" alt="" height="150px"></td>
                                <td>Warhammer 40K Fantasmas de Gaunt Saga</td>
                                <td>Ciencia_Ficción</td>
                                <td>
                                    <a type="button" href="<?= route_to('calzado_detalles',2);?>" class="btn btn-warning waves-effect"><i class="material-icons">info</i> Detalles</a>
                                    <a type="button" href="<?= route_to('dashboard',2);?>" class="btn btn-danger waves-effect"><i class="material-icons">delete</i> Eliminar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><img src="<?= base_url(RECURSOS_PORTAL_IMAGES.'war.jpg'); ?>" alt="" height="150px"></td>
                                <td>HELSREACH</td>
                                <td>Ciencia_Ficción</td>
                                <td>
                                    <a type="button" href="<?= route_to('calzado_detalles',2);?>" class="btn btn-warning waves-effect"><i class="material-icons">info</i> Detalles</a>
                                    <a type="button" href="<?= route_to('dashboard',2);?>" class="btn btn-danger waves-effect"><i class="material-icons">delete</i> Eliminar</a>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <th>#</th>
                            <th>Imagen</th>
                            <th>Titulo Libro</th>
                            <th>Genero</th>
                            <th>Acciones</th>
                        </tfoot>
                    </table>
                </<div>
            </div>  
        </div>  
    </div>
<?= $this->endSection(); ?>

<!-- JS -->
<?= $this->section("js") ?>
    <!-- Jquery DataTable Plugin Js -->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.11.4/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#tabla-calzados').DataTable();
        });
    </script>    
<?= $this->endSection(); ?>
