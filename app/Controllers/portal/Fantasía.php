<?php
namespace App\Controllers\portal;
use App\Controllers\BaseController;
class Fantasía extends BaseController{
    public function __construct(){
        
    }//end constructor

    public function index(){
      return $this->crear_vista('portal/Fantasía',$this->cargar_datos());
    }//end index

    private function cargar_datos(){
        //declaración de arreglo
        $datos = array();

        //
        $datos['nombre_pagina'] = 'Fantasía';

        return $datos;
      }//end index

    public function crear_vista($nombre_vista='',$contenido = array()){
      $contenido['Menu'] ='';
      return view($nombre_vista, $contenido);
    }//end crear vista

}//end clase inicio
