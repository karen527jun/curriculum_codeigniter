<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id';
    protected $allowFields =[
      'nombre',
      'email',
      'telefono',
      'direccion',
      'fechaNacimiento',
      'titulo',
      'experienciaLaboral',
      'habilidades',
      'educacion',
      'idiomas'  
    ];
}