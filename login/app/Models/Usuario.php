<?php 

namespace App\Models;

use CodeIgniter\Model;

class Usuario extends Model
{
    protected $table = "usuarios";

    public function getUsuario()
    {
        return $this->findAll();
    }
}