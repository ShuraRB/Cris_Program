<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//Default route
$routes->get('/', 'Portal\Inicio::index',['as' => 'inicio']);
//CONSTANTES USUARIO
$routes->get('/usuarios', 'Panel\Usuarios::index', ['as' => 'usuarios']);
$routes->get('/acceso', 'Usuario\Acceso::index',['as' => 'acceso']);
$routes->get('/Cerrar_sesion', 'Usuario\Cerrar_sesion::index',['as' => 'Cerrar_sesion']);
//demás constantes usuario
$routes->get('/eliminar_usuario/(:num)', 'Panel\Usuarios::eliminar/$1', ['as' => 'eliminar_usuario']);
$routes->get('/estatus_usuario/(:num)/(:num)', 'Panel\Usuarios::estatus/$1/$2', ['as' => 'estatus_usuario']);
$routes->get('/usuario_nuevo', 'Panel\Usuario_nuevo::index', ['as' => 'usuario_nuevo']);
$routes->post('/registrar_usuario', 'Panel\Usuario_nuevo::registrar', ['as' => 'registrar_usuario']);
$routes->get('/detalles_usuario/(:num)', 'Panel\Usuario_detalles::index/$1', ['as' => 'detalles_usuario']);
$routes->post('/editar_usuario', 'Panel\Usuario_detalles::editar', ['as' => 'editar_usuario']);
//validar acceso 
$routes->post('/validar_acceso', 'Usuario\Acceso::validar_acceso',['as' => 'validar_acceso']);


/**   P O R T A L   **/
//Pagina 
$routes->get('/', 'portal/Inicio::index',['as'=>'Inicio']);
$routes->get('/Drama', 'portal/Drama::index',['as'=>'Drama']);
$routes->get('/Suspenso', 'portal/Suspenso::index',['as'=>'Suspenso']);
$routes->get('/Romantico', 'portal/Romantico::index',['as'=>'Romantico']);
$routes->get('/Fantasía', 'portal/Fantasía::index',['as'=>'Fantasía']);
$routes->get('/Ciencia_Ficción', 'portal/Ciencia_Ficción::index',['as'=>'Ciencia_Ficción']);
$routes->get('/amor', 'portal/amor::index',['as'=>'amor']);
$routes->get('/cuentos', 'portal/cuentos::index',['as'=>'cuentos']);
$routes->get('/codigo', 'portal/codigo::index',['as'=>'codigo']);
$routes->get('/anillo', 'portal/anillo::index',['as'=>'anillo']);


/**   P A N E L   **/
//Tarea dashboard
$routes->get('/dashboard', 'Panel\Dashboard::index',['as' => 'dashboard']);
$routes->get('/login', 'Panel\login::index',['as' => 'login']);
$routes->get('/registro', 'Panel\registro::index',['as' => 'registro']);
$routes->get('/pagina_catalogo_dama', 'Panel\pagina_catalogo_dama::index',['as' => 'pagina_catalogo_dama']);
$routes->get('/pagina_catalogo_suspenso', 'Panel\pagina_catalogo_suspenso::index',['as' => 'pagina_catalogo_suspenso']);
$routes->get('/pagina_catalogo_romantico', 'Panel\pagina_catalogo_romantico::index',['as' => 'pagina_catalogo_romantico']);
$routes->get('/pagina_catalogo_fantasia', 'Panel\pagina_catalogo_fantasia::index',['as' => 'pagina_catalogo_fantasia']);
$routes->get('/pagina_catalogo_ciencia ', 'Panel\pagina_catalogo_ciencia ::index',['as' => 'pagina_catalogo_ciencia ']);
//Tarea usuario
$routes->get('/usuarios', 'Panel\Usuarios::index',['as' => 'usuarios']);
$routes->get('/nuevo_usuario', 'Panel\Usuario_nuevo::index',['as' => 'nuevo_usuario']);
$routes->get('/detalles_usuario/(:num)', 'Panel\Usuario_detalles::index/$1',['as' => 'detalles_usuario']);

//Tarea calzado
$routes->get('/calzados', 'Panel\Calzados::index',['as' => 'calzados']);
$routes->get('/nuevo_calzado', 'Panel\nuevo_calzado::index',['as' => 'nuevo_calzado']);
$routes->get('/calzado_detalles/(:num)', 'Panel\Calzado_detalles::index/$1',['as' => 'calzado_detalles']);

//Nuevo calzado
$routes->get('/nuevo_calzado', 'Panel\Nuevo_calzado::index', ['as' => 'nuevo_calzado']);
$routes->post('/registrar_calzado', 'Panel\Nuevo_calzado::registrar', ['as' => 'registrar_calzado']);
//Editar calzado
$routes->get('/detalles_calzado/(:num)', 'Panel\Calzado_detalles::index/$1', ['as' => 'detalles_calzado']);
$routes->post('/editar_calzado', 'Panel\Calzado_detalles::editar', ['as' => 'editar_calzado']);

//Ofertas
$routes->get('/ofertas', 'Panel\Ofertas::index', ['as' => 'ofertas']);
$routes->get('/oferta_nueva/(:num)', 'Panel\Oferta_nueva::index/$1', ['as' => 'oferta_nueva']);
$routes->post('/actualizar_oferta', 'Panel\Oferta_nueva::actualizar', ['as' => 'actualizar_oferta']);
$routes->get('/eliminar_oferta/(:num)', 'Panel\Oferta_nueva::eliminar/$1', ['as' => 'eliminar_oferta']);
/*

//Tarea perfil
$routes->get('/mi_perfil', 'Panel\Mi_perfil::index',['as' => 'mi_perfil']);

//Tarea Cerrar sesion
$routes->get('/cerrar_sesion', 'Usuario\Cerrar_sesion::index',['as' => 'cerrar_sesion']);
//
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
