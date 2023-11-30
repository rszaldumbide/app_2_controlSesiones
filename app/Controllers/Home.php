<?php

namespace App\Controllers;

use App\Models\portadaModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function portada(): string
    {
        $objPortada = new portadaModel();

        // Cargar la vista del navbar
        $aside = view('layoutAdmin/menu');
        $datos['tbl_portada'] = $objPortada->findAll();

        $data = [
            "menu" => $aside,
            "datos" => $datos
        ];

        return view('layoutAdmin/header') . view('portada', $data) . view('layoutAdmin/footer');
    }
}
