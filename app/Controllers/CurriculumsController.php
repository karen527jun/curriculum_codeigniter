<?php

namespace App\Controllers;

use App\Models\CurriculumModel;

class CurriculumsController extends BaseController
{
    public function index()
    {
        return view('usuario_form');
    }

    public function store()
    {
        $usuarioModel = new CurriculumModel(); 

        // dd($this->request->getPost());
        // Verificar si los datos están llegando
        if ($this->request->getMethod() === 'post') {
            echo "Solicitud POST recibida"; 
            print_r($this->request->getPost());  
            exit;  
        }
        // echo $this->request->getPost();
        // Validar los datos enviados desde el formulario
        $validated = $this->validate([
            'nombre_completo'          => 'required|min_length[3]',
            'correo'           => 'required|valid_email',
            'telefono'        => 'required|numeric|min_length[8]',
            'direccion'       => 'required|min_length[5]',
            'fecha_nacimiento' => 'required|valid_date[Y-m-d]',
            'titulo'          => 'required|min_length[3]',
            'experiencia' => 'required|min_length[10]',
            'habilidades'     => 'required|min_length[5]',
            'educacion'       => 'required|min_length[5]',
            'idiomas'         => 'required|min_length[3]',
        ]);
        
        if (!$validated) {
            return view('usuario_form', [
                'validation' => $this->validator
            ]);
        }

        $usuarioModel->save([
            'nombre_completo' => $this->request->getPost('nombre_completo'),
            'correo'          => $this->request->getPost('correo'),
            'telefono'        => $this->request->getPost('telefono'),
            'direccion'       => $this->request->getPost('direccion'),
            'fecha_nacimiento'=> $this->request->getPost('fecha_nacimiento'),
            'titulo'          => $this->request->getPost('titulo'),
            'experiencia'     => $this->request->getPost('experiencia'),
            'habilidades'     => $this->request->getPost('habilidades'),
            'educacion'       => $this->request->getPost('educacion'),
            'idiomas'         => $this->request->getPost('idiomas'),
        ]);

        return redirect()->to('usuario/success');
    }

    public function success()
    {
        return "Datos guardados con éxito!";
    }

    // funcion lista
    public function list()
    {
        $curriculumModel = new CurriculumModel(); 
        $curriculums = $curriculumModel->findAll(); // Obtener todos los registros de la tabla de usuarios

        return view('usuario_list', ['curriculums' => $curriculums]); 
    }

    public function show($id)
    {   
        $curriculumModel = new CurriculumModel();
        $curriculums = $curriculumModel->find($id);
        
        if($curriculums){
             return view('curriculum_detalle',['curriculum'=> $curriculums]);
        }else{
            return view('errors/404');
        }
    }
}
