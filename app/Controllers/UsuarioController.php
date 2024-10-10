<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class UsuarioController extends BaseController
{
    public function index()
    {
        return view('usuario_form');
    }

    public function store()
    {
        $usuarioModel = new UsuarioModel(); 

        // Verificar si los datos están llegando
        if ($this->request->getMethod() === 'post') {
            echo "Solicitud POST recibida"; 
            print_r($this->request->getPost());  
            exit;  
        }

        // Validar los datos enviados desde el formulario
        $validated = $this->validate([
            'nombre'          => 'required|min_length[3]',
            'email'           => 'required|valid_email',
            'telefono'        => 'required|numeric|min_length[8]',
            'direccion'       => 'required|min_length[5]',
            'fechaNacimiento' => 'required|valid_date[Y-m-d]',
            'titulo'          => 'required|min_length[3]',
            'experienciaLaboral' => 'required|min_length[10]',
            'habilidades'     => 'required|min_length[5]',
            'educacion'       => 'required|min_length[5]',
            'idiomas'         => 'required|min_length[3]',
        ]);

        if (!$validated) {
            return view('usuario_form', [
                'validation' => $this->validator
            ]);
        }

        // Guardar los datos
        $usuarioModel->save([
            'nombre'          => $this->request->getPost('nombre'),
            'email'           => $this->request->getPost('email'),
            'telefono'        => $this->request->getPost('telefono'),
            'direccion'       => $this->request->getPost('direccion'),
            'fechaNacimiento' => $this->request->getPost('fechaNacimiento'),
            'titulo'          => $this->request->getPost('titulo'),
            'experienciaLaboral' => $this->request->getPost('experienciaLaboral'),
            'habilidades'     => $this->request->getPost('habilidades'),
            'educacion'       => $this->request->getPost('educacion'),
            'idiomas'         => $this->request->getPost('idiomas'),
        ]);

        return redirect()->to('/usuario/success');
    }

    public function success()
    {
        return "Datos guardados con éxito!";
    }

    // funcion lista
    public function list()
    {
        $usuarioModel = new UsuarioModel(); 
        $usuarios = $usuarioModel->findAll(); // Obtener todos los registros de la tabla de usuarios

        return view('usuario_list', ['usuarios' => $usuarios]); 
    }
}
