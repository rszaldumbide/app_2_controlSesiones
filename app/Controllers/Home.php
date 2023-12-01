<?php

namespace App\Controllers;

use App\Models\modelLibros;
use App\Models\portadaModel;

class Home extends BaseController
{
    /*  public function index(): string
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
    } */

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

        $datos['tbl_libros'] = $objLibros->ListarLibros();

        $data = [
            "navbar" => $navbar,
            "datos" => $datos
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
