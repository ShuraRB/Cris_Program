<?php
    namespace App\Controllers\Panel;
    use App\Controllers\BaseController;
    class Usuario_detalles extends BaseController {

    public function __construct(){

    }//end __construct

    public function index(){
        return $this->crear_vista('panel/usuario_detalles',$this->cargar_datos());
    }//end index

    private function cargar_datos(){
        //declaración del arreglo
        $datos = array();
        //
        $datos['nombre_pagina'] = 'Usuario detalles';
        //Breadcrumb
        $navegacion = array(
                            array(
                                'icono' => 'home',
                                'tarea' => 'Dahsboard',
                                'href' => route_to('dashboard')
                            ),
                            array(
                                'icono' => 'assignment_ind',
                                'tarea' => 'Usuarios',
                                'href' => route_to('usuarios')
                            ),
                            array(
                                'icono' => 'assignment_ind',
                                'tarea' => 'Usuario detalles',
                                'href' => ''
                            )
                    );
        $datos['breadcrumb'] = breadcrumb_panel($navegacion);    
        return $datos;
    }//end index

    public function crear_vista($nombre_vista = '', $contenido = array()) {
        $contenido['menu'] = crear_menu_panel(TAREA_USUARIO_NUEVO);
        return view($nombre_vista, $contenido);
    }//end crear vista

    }//end class Usuario_nuevo
