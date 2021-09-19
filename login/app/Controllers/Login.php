<?php 

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Usuario;

class Login extends Controller
{
    public function index()
    {   
        $chupetin = new Usuario();
        $data['usuario'] = $chupetin->getUsuario();
        $data['gaa']= "texto";
        echo view('templates/header.php');
        echo view('Login/login',$data);
        echo view('templates/footer.php');
    }
}