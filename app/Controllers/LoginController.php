<?php

namespace App\Controllers;

class LoginController extends Controller
{
    public function index()
    {
        return $this->view('login', [
            'title' => 'Iniciar Sesión',
            'description' => 'Ingrese sus credenciales'
        ]);
    }

    public function login()
    {
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        if ($email == 'admin@admin.com' && $password == '123456') {
            return "Bienvenido al sistema";
        } else {
            return "Correo o contraseña incorrectos";
        }
    }
    
}