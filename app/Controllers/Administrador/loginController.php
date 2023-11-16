<?php

namespace App\Controllers\Administrador;

use App\Controllers\BaseController;

class loginController extends BaseController
{
    public function login()
    {
        return view('layoutAdmin/header') .view('Admin/login'). view('layoutAdmin/footer');
    }

    public function inicio()
    {
        // Cargar la vista del navbar
        $aside = view('layoutAdmin/menu');

        $email = $_GET['email'];
        $pass = $_GET['pass'];

        // Pasar la vista del navbar como un atributo a la vista principal
        $data = [
            "menu" => $aside,
            "email" => $email,
            "pass" => $pass
        ];

        return view('layoutAdmin/header') . view('blank', $data) . view('layoutAdmin/footer');
    }
}
