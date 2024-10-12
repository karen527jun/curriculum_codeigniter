<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'curriculums';
    protected $primaryKey = 'id';
    protected $allowedFields =[
      'nombre_completo',
      'correo',
      'telefono',
      'direccion',
      'fecha_nacimiento',
      'titulo',
      'experiencia',
      'habilidades',
      'educacion',
      'idiomas'  
    ];
}