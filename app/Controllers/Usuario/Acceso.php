<?php
    namespace App\Controllers\Usuario;
    use App\Controllers\BaseController;

    class Acceso extends Basecontroller{
        public function Index(){
            $session = session();
            if(isset($session->tarea_actual)){
                return redirect()->to(route_to('dashboard'));
            }// end if 
            else{
                return $this -> crear_vista("usuario/login", $this->cargar_datos());
            }//end else
            
        }//end index

        private function crear_vista($nombre_vista){
            return view($nombre_vista);
        }//end crear vista


        public function validar_acceso(){
            $email = $this->request->getPost("email");
            $password = $this->request->getPost("password");

            $Tabla_usuarios = new \App\Models\Tabla_usuarios;

            $usuario = $Tabla_usuarios->login($email, hash("sha256", $password));

        if($usuario != null){
            if($usuario->estatus_usuario == 0){
                mensaje("Este usuario esta deshabilitado, comunicate con el administrador", WARNING_ALERT);
                return redirect()->to(route_to('login'));
            }//end if usuario deshabilitado 


            //creacion de la variable de sesión
            $session = session();
            $session ->set("sesion_iniciada", TRUE);
            $session ->set("id_usuario",$usuario->id_usuario);
            $session ->set("nombre_usuario",$usuario->nombre_usuario);
            $session ->set("usuario_completo",$usuario->nombre_usuario.''.$usuario->ap_paterno_usuario.''.$usuario->ap_materno_usuario);
            $session ->set("sexo_usurio",$usuario->sexo_usuario);
            $session ->set("email_usuario",$usuario->email_usuario);
            $session ->set("imagen_usuario",$usuario->imagen_usuario);
            $session ->set("rol_actual",$usuario->id_rol);
            $session ->set("tarea_actual",TAREA_DASHBOARD);
            
            mensaje("Hola de nuevo" .$session->nombre_usuario. "al panel de administración", INFO_ALERT);
            return redirect()->to(route_to('dashboard'));
            
        }//end if
        else{
            mensaje("Correo y/o contraseña son incorrectas, intente de nuevo. ", DANGER_ALERT);
            return redirect()->to(route_to('login'));
        }//end else    
            

            
        }//end validacion acceso
        private function cargar_datos(){
            $datos = array();
            $datos['nombre_pagina'] = 'Iniciar Sesión';
            return $datos;
        }

        /* public function crear_vista($nombre_vista = '', $contenido = array()){
             $contenido['menu'] = '';
             //contenido['menu'] = configurar_menu_portal(PAGINA_INICIO);
             //<contenido['menu'] = crear_menu_portal(PAGINA_INICIO);
             return view($nombre_vista, $contenido);
         } */



    }//end class acceso