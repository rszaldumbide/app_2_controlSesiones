<?php

namespace App\Controllers;

use App\Models\modelLibros;

class Home extends BaseController
{
    public function index(): string
    {
        $navbar = view('Usuarios/layoutsUsuarios/navbar');

        $data = [
            "navbar" => $navbar
        ];

        return view('Usuarios/layoutsUsuarios/header') . view('Usuarios/main', $data) . view('Usuarios/layoutsUsuarios/footer');
    }

    public function Listarlibros(): string
    {
        $navbar = view('Usuarios/layoutsUsuarios/navbar');
        $objLibros = new modelLibros();

        $respuesta =$objLibros->ListarLibros();
        $respuesta2 =$objLibros->ListarTemas();

        $data = [
            "navbar" => $navbar,
            "datos" => $respuesta,
            "datos2" => $respuesta2
        ];

        return view('Usuarios/layoutsUsuarios/header') . view('Usuarios/libros', $data) . view('Usuarios/layoutsUsuarios/footer');
    }

    public function BuscarLibros()
    {
        $navbar = view('Usuarios/layoutsUsuarios/navbar');
        $objLibros = new modelLibros();
        $codigo = $_POST['buscarCodigo'];

        $libroEncontrado = $objLibros->BuscarLibros($codigo);

        $data = [
            "navbar" => $navbar,
            "libroEncontrado" => $libroEncontrado,
        ];

        return view('Usuarios/layoutsUsuarios/header') . view('Usuarios/busqueda', $data) . view('Usuarios/layoutsUsuarios/footer');
    }
}
