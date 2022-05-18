<?php 
    namespace App\Controllers\Panel;
    use App\Controllers\BaseController;
    use App\Libraries\Permisos;

    class Nuevo_calzado extends BaseController{

        private $session;
        private $permitido = TRUE;

        public function __construct(){
            //cargar el permiso roles
            helper('permisos_roles_helper');
            //instancia de la sesion
            $session = session();
            //Verifica si el usuario logeado cuenta con los permiso de esta area
            if (acceso_usuario(TAREA_CATALOGO)) {
                $session->tarea_actual = TAREA_CATALOGO;
            }//end if 
            else{
                $this->permitido = FALSE;
            }//end else
        }//end constructor

        public function index(){
            //verifica si tiene permisos para continuar o no
            if($this->permitido){
                return $this->crear_vista("panel/nuevo_calzado", $this->cargar_datos());
            }//end if rol permitido
            else{
                mensaje("No tienes permiso para acceder a este módulo, contacte al administrador", WARNING_ALERT);
                return redirect()->to(route_to('acceso'));
            }//end else rol no permitido
        }//end index

        private function cargar_datos(){
            //======================================================================
            //==========================DATOS FUNDAMENTALES=========================
            //======================================================================
            //Declaración del arreglo
            $datos = array();
            //Instancia de la variable de sesión
            $session = session();

            //Datos fundamentales para la plantilla base
            $datos['nombre_completo_usuario'] = $session->usuario_completo;
            $datos['nombre_usuario'] = $session->nombre_usuario;
            $datos['email_usuario'] = $session->email_usuario;
            $datos['imagen_usuario'] = ($session->imagen_usuario != NULL) 
            ? base_url(RECURSOS_PANEL_CONTENIDO.'/imagenes/usuario/'.$session->imagen_usuario)
            : (($session->sexo_usuario == SEXO_FEMENINO) ? base_url(RECURSOS_PANEL_CONTENIDO.'/imagenes/usuario/female.jpg') : base_url(RECURSOS_PANEL_CONTENIDO.'/imagenes/usuario/male.jpg'));

            //Datos propios por vista y controlador
            $datos['nombre_pagina'] = 'Nuevo Libro';
            return $datos;
        }//end cargar_datos

        private function crear_vista($nombre_vista, $contenido = array()){
            $contenido['menu'] = crear_menu_panel(TAREA_CATALOGO, '');
            return view($nombre_vista, $contenido);
        }//end crear_vista


        private function subir_archivo($file = NULL){
            $file_size = $file->getSize();
            $file_extension = $file->getClientExtension();
            $file_info = \Config\Services::image()
                                        ->withFile($file)
                                        ->getFile()
                                        ->getProperties(true);
            $file_name = (hash("sha256", fecha_actual())).'.'.$file_extension;
            if($file_size <= 2097152 &&
                ($file_extension == 'jpeg' || $file_extension == 'jpg' || $file_extension == 'png') &&
                $file_info['width'] <= 512 && $file_info['height'] <= 512){
                $file->move(IMG_DIR_CALZADOS, $file_name);
                return $file_name;
            }//end if la imagen cumple con los requisitos
            else{
                mensaje('Tu imagen no cumple con los requisitos solicitados.', DANGER_ALERT);
                return NULL;
            }//end else
        }//end subir_archivo

        // -----------------------------------------------------
        // -----------------------------------------------------
        public function registrar() {
            
            //Cargamos el modelo correspondiente
            $tabla_calzados = new \App\Models\Tabla_calzados;

            //Declaración del arreglo 
            $calzado = array();
            //$calzado['estatus_calzado'] = ESTATUS_HABILITADO;
            $calzado['titulo'] = $this->request->getPost('titulo');
            $calzado['editorial'] = $this->request->getPost('editorial');
            $calzado['paginas'] = $this->request->getPost('paginas');
            $calzado['genero'] = $this->request->getPost('genero');
            $calzado['precio'] = $this->request->getPost('precio');
            $calzado['imagen'] = $this->request->getPost('imagen_libro');
            $calzado['descripcion'] = $this->request->getPost('descripcion');
            $calzado['fecha'] = fecha_actual();
            // $usuario['imagen_calzado'] = $this->request->getPost('');
            // dd($calzado);

            //verificar si tiene algo el input de file
            if(!empty($this->request->getFile('image_calzado')) && $this->request->getFile('image_calzado')->getSize() > 0){
                $calzado['imagen_calzado'] = $this->subir_archivo($this->request->getFile('image_calzado'));
                if($tabla_calzados->insert($calzado) > 0){
                    mensaje("El libro ha sido registrado exitosamente", SUCCESS_ALERT);
                    return redirect()->to(route_to('catalogo_dama_panel'));
                }//end if se inserta el usuario
                else{
                    mensaje("Hubo un error al registrar el libro. Intente nuevamente, por favor", DANGER_ALERT);
                    return $this->index();
                }//end else se inserta el usuario
			}//end if existe imagen
            else{
                mensaje("Hubo error al subir la imagen. Intente nuevamente, por favor", DANGER_ALERT);
                return $this->index();
            }//end else 


        }//end registrar
    }//End Class Dashboard