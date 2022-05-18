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
                    Todos los usuarios<br>
                    <a type="button" href="<?= route_to('nuevo_usuario');?>" class="btn btn-primary waves-effect"><i class="material-icons">add_circle</i>  Agregar nuevo</a>
                    <!-- <small>Todos los campos marcados con * son obligatorios</small> -->
                </h2>
            </div>
            <!--  -->
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Rol</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Juan Pablo Gutierrez Gonzalez</td>
                                <td>juanpablo@gmail.com</td>
                                <td>Administrador</td>
                                <td>
                                    <a type="button" href="<?= route_to('detalles_usuario',1);?>" class="btn btn-warning waves-effect"><i class="material-icons">info</i> Detalles</a>
                                    <a type="button" href="<?= route_to('dashboard',1);?>" class="btn btn-danger waves-effect"><i class="material-icons">delete</i> Eliminar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Emmanuel López Pérez</td>
                                <td>emmanuel.lop98@gmail.com</td>
                                <td>Operador</td>
                                <td>
                                    <a type="button" href="<?= route_to('detalles_usuario',2);?>" class="btn btn-warning waves-effect"><i class="material-icons">info</i> Detalles</a>
                                    <a type="button" href="<?= route_to('dashboard',2);?>" class="btn btn-danger waves-effect"><i class="material-icons">delete</i> Eliminar</a>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Rol</th>
                                <th>Acciones</th>
                            </tr>
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
            $('#example').DataTable();
        } );
    </script>    
<?= $this->endSection(); ?>
