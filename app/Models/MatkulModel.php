<?php

namespace App\Models;

use CodeIgniter\Model;

class MatkulModel extends Model
{
    protected $table      = 'courses';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'name', 'description', 'goals', 'sks', 'lecturer', 'schedule',
        'classroom_link', 'wa_link', 'image'
    ];
}
