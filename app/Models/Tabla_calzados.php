<?php
    namespace App\Models;
    use CodeIgniter\Model;


    class Tabla_calzados extends Model {

        protected $table      = 'libros';
        protected $primaryKey = 'id_libro';
        protected $returnType = 'object';

        protected $allowedFields = [
                                    'id_libro', 'titulo', 'editorial', 'genero', 'paginas', 
                                     'precio', 'imagen_libro', 'descripcion', 'fecha'
                                    ];
        
        //Funciones que nos ayudaran a realizar peticiones (consultas) para obtener la información que deseemos
        public function data_table_calzados($tipo_categoria = 0) {
            $resultado = $this
                    ->select('
                                id_libro, titulo, editorial, genero, paginas, 
                                 precio, imagen_libro, descripcion, fecha
                            ')
                    ->where('genero',$tipo_categoria)
                    ->orderBy('titulo', 'ASC')
                    ->findAll();
             return $resultado;
        }//end data_table_calzados

        public function obtener_calzado($id_libro = 0){
            $resultado = $this
                        ->select('
                                id_libro, titulo, editorial, genero, paginas, 
                                precio, imagen_libro, descripcion, fecha
                                ')
                        ->where('id_libro', $id_libro)
                        ->first();
            return $resultado;
        }//end obtener_calzado

        public function calzados_limit($limit) {
            $resultado = $this
                ->select('
                        id_libro, titulo, editorial, genero, paginas, 
                        precio, imagen_libro, descripcion, fecha
                        ')
                ->orderBy('id_libro', 'ASC')
                ->limit($limit)
                ->find();
            return $resultado;
        }// 

        public function calzados_actuales($fecha ='0000-00-00',$limit = 0) {
            $resultado = $this
                ->select('
                        id_libro, titulo, editorial, genero, paginas, 
                        precio, imagen_libro, descripcion, fecha
                        ')
                ->orderBy('titulo', 'ASC')
                ->where('fecha',$fecha)
                ->limit($limit)
                ->find();
            return $resultado;
        }// 

        public function oferta_calzados($id_categoria = 0, $limit = 0){
            $resultado = $this
                        ->select('
                                    calzados.estatus_calzado, calzados.id_calzado, calzados.marca, calzados.modelo, calzados.color, calzados.talla,
                                    calzados.genero, calzados.precio, calzados.imagen_calzado, calzados.destacado, calzados.fecha, ofertas.estatus_ofertas,
                                    ofertas.id_oferta, ofertas.descuento, ofertas.fin_oferta
                                ')
                        ->where('calzados.genero', $id_categoria)
                        ->join('ofertas','calzados.id_calzado= ofertas.id_calzado', 'left')
                        ->limit($limit)
                        ->find();
            return $resultado;
        }//end obtener_oferta_calzado

        public function obtener_oferta_calzados($id_calzado = 0){
            $resultado = $this
                        ->select('
                                    calzados.estatus_calzado, calzados.id_calzado, calzados.marca, calzados.modelo, calzados.color, calzados.talla,
                                    calzados.genero, calzados.precio, calzados.imagen_calzado, calzados.destacado, calzados.fecha, 
                                    calzados.descripcion, ofertas.estatus_ofertas,
                                    ofertas.id_oferta, ofertas.descuento, ofertas.fin_oferta, ofertas.id_calzado
                                ')
                        ->where('calzados.id_calzado', $id_calzado)
                        ->join('ofertas','calzados.id_calzado= ofertas.id_calzado', 'left')
                        ->first();
            return $resultado;
        }//end obtener_oferta_calzado
    }//End Model calzados
    


