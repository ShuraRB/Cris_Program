<?php
    namespace App\Controllers\Panel;
    use App\Controllers\BaseController;
    class Calzado_nuevo extends BaseController {

    public function __construct(){

    }//end __construct

    public function index(){
        return $this->crear_vista('panel/calzado_nuevo',$this->cargar_datos());
    }//end index

    private function cargar_datos(){
        //declaración del arreglo
        $datos = array();
        //
        $datos['nombre_pagina'] = 'Calzado nuevo';
        //Breadcrumb
        $navegacion = array(
                        array(
                            'icono' => 'home',
                            'tarea' => 'Dahsboard',
                            'href' => route_to('dashboard')
                        ),
                        array(
                            'icono' => 'assignment_ind',
                            'tarea' => 'Calzados',
                            'href' => route_to('calzados')
                        ),
                        array(
                            'icono' => 'assignment_ind',
                            'tarea' => 'Calzado nuevo',
                            'href' => ''
                        )
                );
            $datos['breadcrumb'] = breadcrumb_panel($navegacion);    
        return $datos;
    }//end index

    public function crear_vista($nombre_vista = '', $contenido = array()) {
        $contenido['menu'] = crear_menu_panel(TAREA_CALZADO_NUEVO);
        return view($nombre_vista, $contenido);
    }//end crear vista

    }//end class Usuario_nuevo
