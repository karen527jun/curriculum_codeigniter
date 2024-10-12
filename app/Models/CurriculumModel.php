<?php

namespace App\Models;

use CodeIgniter\Model;

class CurriculumModel extends Model
{
    protected $table      = 'curriculums'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id';
    protected $allowedFields = [
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
