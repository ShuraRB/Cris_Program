<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title><?= $nombre_pagina ;?> | Project Alumnos</title>
        

        <!-- Custom fonts for this template-->
        <link href="<?= base_url(RECURSOS_PANEL_VENDOR.'fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <!-- Custom styles for this template-->
        <link href="<?= base_url(RECURSOS_PANEL_CSS.'sb-admin-2.min.css');?>" rel="stylesheet">
        <!-- ============================================================== -->
        <!-- This page css -->
        <?= $this->renderSection("css") ?>
        <!-- ============================================================== -->
    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                    <div class="sidebar-brand-icon rotate-n-0">
                    <i class='#' style='color:#ffffff'></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">Project Alumnos</div>
                </a>
                <!-- MENU LATERAL -->
                <?= $menu; ?>
            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $nombre_usuario; ?></span>
                                    <img class="img-profile rounded-circle" src="<?= $imagen_usuario; ?>">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="detalles_usuario/<?php echo $_SESSION["id_usuario"];?>">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Mi Perfil
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Salir
                                    </a>
                                </div>
                            </li>

                        </ul>

                    </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800"><?= $nombre_pagina; ?></h1>
                        </div>
                        <!-- *********************************************** -->
                        <!-- ************* CONTENIDO PRINCIPAL ************* -->
                        <?= $this->renderSection("contenido") ?>
                        <!-- *********************************************** -->
                        <!-- *********************************************** -->
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; AS GOOD AS BOOK 2022</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">¿<?= $nombre_usuario;?> estás seguro de Cerrar Sesión?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <center>
                            <img src="<?= $imagen_usuario; ?>" alt="imagen_usuario" class="img-profile rounded-circle" height="150px"><br>
                            <br>
                            Selecciona "Cerrar Sesión" si deseas salir.
                        </center>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
                        <a class="btn btn-success" href="<?= route_to('Cerrar_sesion');?>">Cerrar Sesión</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="<?= base_url(RECURSOS_PANEL_VENDOR.'jquery/jquery.min.js');?>"></script>
        <script src="<?= base_url(RECURSOS_PANEL_VENDOR.'bootstrap/js/bootstrap.bundle.min.js');?>"></script>
        <!-- Core plugin JavaScript-->
        <script src="<?= base_url(RECURSOS_PANEL_VENDOR.'jquery-easing/jquery.easing.min.js');?>"></script>
        <!-- Custom scripts for all pages-->
        <script src="<?= base_url(RECURSOS_PANEL_JS.'sb-admin-2.min.js');?>"></script>
        <!-- ********************************************************** -->
        <!-- **************** BOOTSTRAP NOTIFY********************** -->
        <script src="<?= base_url(RECURSOS_PANEL_CONTENIDO.'plugins/bootstrap-notify.min.js');?>"></script>
        
        <script>
            <?= mostrar_mensaje(); ?>
        </script>

        <!-- ============================================================== -->
        <!-- This page plugins -->
        <?= $this->renderSection("js") ?>
        <!-- ============================================================== -->
    </body>
</html>