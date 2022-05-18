<?php
    namespace App\Controllers\Panel;
    use App\Controllers\BaseController;
    class Dashboard extends BaseController {

        private $session;
        private $permitido = TRUE;

        public function __construct(){
            helper('permisos_roles_helper');

            $session = session();
            if (acceso_usuario(TAREA_DASHBOARD)){
                $session->tarea_actual = TAREA_DASHBOARD;
            }
            else{
                $this->permitido = FALSE;
            }
        }//end __construct

        public function index(){
            if($this->permitido){
                return $this->crear_vista('Panel/dashboard',$this->cargar_datos());
            }//end if rol permitido
            else{
                mensaje("No tienes permiso para acceder a este módulo, contacte al administrador", WARNING_ALERT);
                return redirect()->to(route_to('login'));
            }

            
        }//end index

        private function cargar_datos(){
        //declaración del arreglo
        $datos = array();
        
        //Instancias de la variable sesión 
        $session = session();
        //Datos propios para la plantilla base
        $datos['nombre_completo_usuario'] = $session->usuario_completo;
        $datos['nombre_usuario'] = $session->nombre_usuario;
        $datos['email_usuario'] = $session->email_usuario;
        $datos['imagen_usuario'] = ($session->imagen_usuario != NULL)
        ? base_url(RECURSOS_PANEL_CONTENIDO.'/imagenes/usuario/'.$session->imagen_usuario)
        : (($session->sexo_usuario == SEXO_FEMENINO) ? base_url(RECURSOS_PANEL_CONTENIDO.'/imagenes/usuario/female.jpg') : base_url(RECURSOS_PANEL_CONTENIDO.'/imagenes/usuario/male.jpg'));


        //Datos propios por vista y controlador
        $datos['nombre_pagina'] = 'Dashboard';
        //Breadcrumb
	
        return $datos;
        }//end cargar datos
  
        private function crear_vista($nombre_vista, $contenido = array()) {
            $contenido['menu'] = crear_menu_panel(TAREA_DASHBOARD, '');
            return view($nombre_vista, $contenido);
        }//end crear vista

    }//end class Dashboard

    


    //<?php
    //namespace App\Controllers\Panel;
    //use App\Controllers\BaseController;
    //class Dashboard extends BaseController {

        //public function __construct(){//

        //}//end __construct

        //public function index(){
            //return $this->crear_vista('panel/dashboard',$this->cargar_datos());
        //}//end index

       // private function cargar_datos(){
        //declaración del arreglo
        //$datos = array();
        //
        //$datos['nombre_pagina'] = 'Dashboard';
        //Breadcrumb
	
        //return $datos;
        //}//end index

        //public function crear_vista($nombre_vista = '', $contenido = array()) {
            //$contenido ['menu'] = null;
            //$contenido['menu'] = crear_menu_panel(TAREA_DASHBOARD);
           // return view($nombre_vista, $contenido);
        //}//end crear vista

    //}//end class Dashboard

