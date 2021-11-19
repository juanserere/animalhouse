<?php

namespace App\Controllers;
use App\Models\ProductoModelo;

class Producto extends BaseController
{
    public function index()
    {
        return view('registroProducto');
    } 

    public function registrar(){
        //1. recibir datos del formulario
        $producto=$this->request->getPost("producto");
        $foto=$this->request->getPost("foto");
        $precio=$this->request->getPost("precio");
        $descripcion=$this->request->getPost("descripcion");
        $tipo=$this->request->getPost("tipo");

        //se aplican validaciones
        if ($this->validate('formularioProducto')) {

            //conectar la BD e insertar datos
            try {
                $modelo=new ProductoModelo();

                //armar el paquete de datos a registrar
                $datos=array(
                    "nombre"=>$producto,
                    "foto"=>$foto,
                    "precio"=>$precio,
                    "descripcion"=>$descripcion,
                    "tipo"=>$tipo
                     );
                //agregar datos
                $modelo->insert($datos);

                //entrego una respuesta
                $mensaje="Se agregó el producto";
                return redirect()->to(site_url('/productos/registro'))->with('mensaje',$mensaje);
                
            } catch (\Exception $error){
                
                $mensaje=$error->getMessage();
                return redirect()->to(site_url('/productos/registro'))->with('mensaje',$mensaje);
            }

        }else{
           

            $mensaje="Hay campos sin llenar";
            return redirect()->to(site_url('/productos/registro'))->with('mensaje',$mensaje);
        }

    }

    public function buscar(){

        try {

            $modelo=new ProductoModelo();
            //utilizar el modelo para traer de la bd los datos
            $resultado=$modelo->findAll();

            //paso los datos como un arreglo asociativo
            $productos=array("productos"=>$resultado);

            //cargar la vista con los datos
            return view('listaProductos',$productos);
        } catch (\Exception $error) {

            $mensaje=$error->getMessage();
            return redirect()->to(site_url('/productos/registro'))->with('mensaje',$mensaje);
            
        }

    }

    public function eliminar($id){

        try{
            //Necesito llamar al modelo
             //crear un objeto de clase modelo
             $modelo=new ProductoModelo();
 
              //utilizar el modelo de la BD
             //y eliminar el registro 
             $modelo->where('id',$id)->delete();
 
             //Entrego una respuesta
             $mensaje="Se eliminó el Producto";
             return redirect()->to(site_url('/productos/registro'))->with('mensaje',$mensaje);
 
 
 
       }catch(\Exception $error){
 
         $mensaje=$error->getMessage();
         return redirect()->to(site_url('/productos/registro'))->with('mensaje',$mensaje);
 
       }

    }

    public function editar($id){
        
        //1. recibir datos del formulario
        $producto=$this->request->getPost("producto");
        $foto=$this->request->getPost("foto");
        $precio=$this->request->getPost("precio");
        $descripcion=$this->request->getPost("descripcion");
        $tipo=$this->request->getPost("tipo");


        if ($this->validate('formularioProducto')) {

            //conectar la BD e insertar datos
            try {
                $modelo=new ProductoModelo();

                //armar el paquete de datos a registrar
                $datos=array(
                    "nombre"=>$producto,
                    "foto"=>$foto,
                    "precio"=>$precio,
                    "descripcion"=>$descripcion,
                    "tipo"=>$tipo
                     );
                //agregar datos
                $modelo->update($id,$datos);

                //entrego una respuesta
                $mensaje="Se editó el producto";
                return redirect()->to(site_url('/productos/registro'))->with('mensaje',$mensaje);
                
            } catch (\Exception $error){
                
                $mensaje=$error->getMessage();
                return redirect()->to(site_url('/productos/registro'))->with('mensaje',$mensaje);
            }

        }else{
           

            $mensaje="Hay campos sin llenar";
            return redirect()->to(site_url('/productos/registro'))->with('mensaje',$mensaje);
        }






    }

}
