<?php

namespace App\Controllers;
use App\Models\AnimalModelo;

class Animal extends BaseController
{
    public function index()
    {
        return view('registroAnimal');
    }

    public function registrar(){
        //1. recibir datos del formulario
        $nombre=$this->request->getPost("nombre");
        $foto=$this->request->getPost("foto");
        $edad=$this->request->getPost("edad");
        $tipo=$this->request->getPost("tipo");
        $descripcion=$this->request->getPost("descripcion");

         //se aplican validaciones
         if ($this->validate('formularioAnimal')) {

            //conectar la BD e insertar datos
            try {
                $modelo=new AnimalModelo();

                //armar el paquete de datos a registrar
                $datos=array(
                    "nombre"=>$nombre,
                    "foto"=>$foto,
                    "edad"=>$edad,
                    "tipo"=>$tipo,
                    "descripcion"=>$descripcion
                     );
                //agregar datos
                $modelo->insert($datos);

                //entrego una respuesta
                $mensaje="Se agregó el animal";
                return redirect()->to(site_url('/animal/registro'))->with('mensaje',$mensaje);
                
            } catch (\Exception $error){
                
                $mensaje=$error->getMessage();
                return redirect()->to(site_url('/animal/registro'))->with('mensaje',$mensaje);
            }
            

        } else {

            $mensaje="Hay campos sin llenar";
            return redirect()->to(site_url('/animal/registro'))->with('mensaje',$mensaje);
        }
    }

    public function buscar(){

        try {

            $modelo=new AnimalModelo();
            //utilizar el modelo para traer de la bd los datos
            $resultado=$modelo->findAll();

            //paso los datos como un arreglo asociativo
            $animales=array("animales"=>$resultado);

            //cargar la vista con los datos
            return view('listaAnimales',$animales);
        } catch (\Exception $error) {

            $mensaje=$error->getMessage();
            return redirect()->to(site_url('/animal/registro'))->with('mensaje',$mensaje);
            
        }

    }

    public function eliminar($id){

        try{
            //Necesito llamar al modelo
             //crear un objeto de clase modelo
             $modelo=new AnimalModelo();
 
              //utilizar el modelo de la BD
             //y eliminar el registro 
             $modelo->where('id',$id)->delete();
 
             //Entrego una respuesta
             $mensaje="Se eliminó el animal";
             return redirect()->to(site_url('/animal/registro'))->with('mensaje',$mensaje);
 
 
 
       }catch(\Exception $error){
 
         $mensaje=$error->getMessage();
         return redirect()->to(site_url('/animal/registro'))->with('mensaje',$mensaje);
 
       }

    }

    public function editar($id){
       
        $nombre=$this->request->getPost("nombre");
        $foto=$this->request->getPost("foto");
        $edad=$this->request->getPost("edad");
        $tipo=$this->request->getPost("tipo");
        $descripcion=$this->request->getPost("descripcion");

         //se aplican validaciones
         if ($this->validate('formularioAnimal')) {

            //conectar la BD e insertar datos
            try {
                $modelo=new AnimalModelo();

                //armar el paquete de datos a registrar
                $datos=array(
                    "nombre"=>$nombre,
                    "foto"=>$foto,
                    "edad"=>$edad,
                    "tipo"=>$tipo,
                    "descripcion"=>$descripcion
                     );
                //agregar datos
                $modelo->update($id,$datos);

                //entrego una respuesta
                $mensaje="Se editó el animal";
                return redirect()->to(site_url('/animal/registro'))->with('mensaje',$mensaje);
                
            } catch (\Exception $error){
                
                $mensaje=$error->getMessage();
                return redirect()->to(site_url('/animal/registro'))->with('mensaje',$mensaje);
            }
            

        } else {

            $mensaje="Hay campos sin llenar";
            return redirect()->to(site_url('/animal/registro'))->with('mensaje',$mensaje);
        }

    }
}
