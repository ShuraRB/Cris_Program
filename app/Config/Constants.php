<?php

/*
 | --------------------------------------------------------------------
 | App Namespace
 | --------------------------------------------------------------------
 |
 | This defines the default Namespace that is used throughout
 | CodeIgniter to refer to the Application directory. Change
 | this constant to change the namespace that all application
 | classes should use.
 |
 | NOTE: changing this will require manually modifying the
 | existing namespaces of App\* namespaced-classes.
 */
defined('APP_NAMESPACE') || define('APP_NAMESPACE', 'App');

/*
 | --------------------------------------------------------------------------
 | Composer Path
 | --------------------------------------------------------------------------
 |
 | The path that Composer's autoload file is expected to live. By default,
 | the vendor folder is in the Root directory, but you can customize that here.
 */
defined('COMPOSER_PATH') || define('COMPOSER_PATH', ROOTPATH . 'vendor/autoload.php');

/*
 |--------------------------------------------------------------------------
 | Timing Constants
 |--------------------------------------------------------------------------
 |
 | Provide simple ways to work with the myriad of PHP functions that
 | require information to be in seconds.
 */
defined('SECOND') || define('SECOND', 1);
defined('MINUTE') || define('MINUTE', 60);
defined('HOUR')   || define('HOUR', 3600);
defined('DAY')    || define('DAY', 86400);
defined('WEEK')   || define('WEEK', 604800);
defined('MONTH')  || define('MONTH', 2592000);
defined('YEAR')   || define('YEAR', 31536000);
defined('DECADE') || define('DECADE', 315360000);

/*
 | --------------------------------------------------------------------------
 | Exit Status Codes
 | --------------------------------------------------------------------------
 |
 | Used to indicate the conditions under which the script is exit()ing.
 | While there is no universal standard for error codes, there are some
 | broad conventions.  Three such conventions are mentioned below, for
 | those who wish to make use of them.  The CodeIgniter defaults were
 | chosen for the least overlap with these conventions, while still
 | leaving room for others to be defined in future versions and user
 | applications.
 |
 | The three main conventions used for determining exit status codes
 | are as follows:
 |
 |    Standard C/C++ Library (stdlibc):
 |       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
 |       (This link also contains other GNU-specific conventions)
 |    BSD sysexits.h:
 |       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
 |    Bash scripting:
 |       http://tldp.org/LDP/abs/html/exitcodes.html
 |
 */
defined('EXIT_SUCCESS')        || define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          || define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         || define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   || define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  || define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') || define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     || define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       || define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      || define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      || define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code

//************************************************************************************
//********************************* CONSTANTES PANEL *********************************
//************************************************************************************

//RUTAS BASE
define("RECURSOS_PANEL_CSS", "recursos_panel/css/");
define("RECURSOS_PANEL_SCSS", "recursos_panel/scss/");
define("RECURSOS_PANEL_JS", "recursos_panel/js/");
define("RECURSOS_PANEL_IMG", "recursos_panel/img/");
define("RECURSOS_PANEL_VENDOR", "recursos_panel/vendor/");
define("RECURSOS_PANEL_CONTENIDO", "recursos_contenido/");


//************************************************************************************
//********************************* CONSTANTES PORTAL ********************************
//************************************************************************************
//RUTAS BASE
define("RECURSOS_PORTAL_CSS", "recursos_portal/assets/css/");
define("RECURSOS_PORTAL_JS", "recursos_portal/assets/js/");
define("RECURSOS_PORTAL_IMAGES", "recursos_portal/images/");
define("RECURSOS_PORTAL_SCSS", "recursos_portal/assets/scss/");
define("RECURSOS_PORTAL_WEBFONTS", "recursos_portal/assets/webfonts/");

//************************************************************************************
//********************************* CONSTANTES PANEL / TAREA**************************
//************************************************************************************
define("TAREA_DASHBOARD",'tarea_dashboard');
define("TAREA_USUARIOS",'tarea_usuarios');
define("TAREA_USUARIO_NUEVO",'tarea_usuario_nuevo');
define("TAREA_USUARIO_DETALLES",'tarea_usuario_detalles');
define("TAREA_CALZADOS",'tarea_calzados');
define("TAREA_CALZADO_NUEVO",'tarea_calzado_nuevo');
define("TAREA_CALZADO_DETALLES",'tarea_calzado_detalles');
define("TAREA_CATALOGO_DAMA",'pagina_catalogo_dama');
define("TAREA_CATALOGO_SUSPENSO",'pagina_catalogo_suspenso');
define("TAREA_CATALOGO_ROMANTICO",'pagina_catalogo_romantico');
define("TAREA_CATALOGO_FANTASIA",'pagina_catalogo_fantasia');
define("TAREA_CATALOGO_CIENCIA",'pagina_catalogo_ciencia');
define("TAREA_OFERTA",'pagina_oferta');
define("TAREA_PERFIL",'tarea_perfil');

//************************************************************************************
//********************************* CONSTANTES PORTAL / PAGINA************************
//************************************************************************************
define("PAGINA_INICIO",'pagina_inicio');
define("PAGINA_OFERTA",'pagina_oferta');
define("TAREA_CATALOGO",'pagina_catalogo');
define("PAGINA_CATALOGO_DAMA",'pagina_catalogo_dama');
define("PAGINA_CATALOGO_CABALLERO",'pagina_catalogo_caballero');
define("PAGINA_GALERIA",'pagina_galeria');
define("PAGINA_CONTACTO",'pagina_contacto');
define("PAGINA_ACERCA_DE",'pagina_acerca_de');



//****************************************************************************************
//********************************* CONSTANTES GENERALES *********************************
//****************************************************************************************

//RUTAS BASE
define("CONTENIDO_IMAGENES", "imagenes/usuario/");
define("CONTENIDO_IMAGENES_CALZADO", "imagenes/calzado/");

//****************************************************************************************
//********************************* CONSTANTES GENERALES *********************************
//****************************************************************************************
//ROLES
define("ROL_SUPERADMIN",  array('nombre'=>'Superadmin',      'clave' => '444'));
define("ROL_OPERADOR",    array('nombre'=>'Operador',        'clave' => '784'));

define("ROLES", array(444 => 'Super Administrador',784 => 'Operador'));
/* define("ROLES", array(444 => ROL_SUPERADMIN,784 => ROL_OPERADOR)); */

//CONSTANTES PARA DETEMINAR EL SEXO DEL USUARIO
define("SEXO_FEMENINO", 0);
define("SEXO_MASCULINO", 1);

//NUEVA CONSTANTE SEXO
define("SEXO", array(
    0 => 'Femenino',
    1 => 'Masculino'
));

//CONSTANTES PARA LAS ALERTAS
define("SUCCESS_ALERT", 1);
define("DANGER_ALERT", 2);
define("WARNING_ALERT", 3);
define("INFO_ALERT", 4);

//CONSTANTES PARA VALIDAR EL ESTATUS 
define("ESTATUS_HABILITADO",2);
define("ESTATUS_DESHABILITADO", 0);

//PERMISO DE LAS TAREAS POR ROLES
define("PERMISOS_ADMIN", array(
    TAREA_DASHBOARD,
    TAREA_USUARIOS,
    TAREA_USUARIO_DETALLES,
    TAREA_CATALOGO,
    TAREA_CATALOGO_DAMA,
    TAREA_CATALOGO_SUSPENSO,
    TAREA_CATALOGO_ROMANTICO,
    TAREA_CATALOGO_FANTASIA,
    TAREA_CATALOGO_CIENCIA,
    //TAREA_CATALOGO_CABALLERO,
    TAREA_OFERTA
    ));

define("PERMISOS_OPERADOR", array(
    TAREA_DASHBOARD,
    TAREA_CATALOGO_DAMA,
    TAREA_CATALOGO_SUSPENSO,
    TAREA_CATALOGO_ROMANTICO,
    TAREA_CATALOGO_FANTASIA,
    TAREA_CATALOGO_CIENCIA,
    TAREA_OFERTA
    // TAREA_CATALOGO
    ));

    define("MARCA_CALZADO", array(
        1 => 'Adidas',
        2 => 'Puma',
        3 => 'Nike',
        4 => 'Reebok',
        5 => 'Vans',
  ));

define("TIPO_CALZADO", array(
        0 => 'Suspenso',
        1 => 'Drama',
        2 => 'Romantico',
        3 => 'Fantasía',
        4 => 'Ciencia Ficción'
  ));

define("CALZADO_DESTACADO", array(
    0 => 'No',
    1 => 'Si'
));

define("TIPO_CALZADO_DAMA",1);
define("TIPO_CALZADO_CABALLERO",0);

//RUTAS PARA LAS IMAGENES
define("IMG_DIR_USUARIOS","recursos_contenido/imagenes/usuario");
define("IMG_DIR_CALZADOS","recursos_portal/images/");

