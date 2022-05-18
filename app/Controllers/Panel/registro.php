<?php
    namespace App\Controllers\Panel;
    use App\Controllers\BaseController;
    class registro extends BaseController {

        public function __construct(){

        }//end __construct

        public function index(){
            return $this->crear_vista('panel/registro',$this->cargar_datos());
        }//end index

        private function cargar_datos(){
        //declaración del arreglo
        $datos = array();
        //
        $datos['nombre_pagina'] = 'registro';
        //Breadcrumb
	
        return $datos;
        }//end index

        public function crear_vista($nombre_vista = '', $contenido = array()) {
            $contenido ['menu'] = '';
            //$contenido['menu'] = crear_menu_panel(TAREA_DASHBOARD);
            return view($nombre_vista, $contenido);
        }//end crear vista

    }//end class Dashboard