<?php

namespace App\Models;

use CodeIgniter\Model;

class modelLibros extends Model
{
    protected $table      = 'tbl_libros';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'lib_id';
    protected $allowedFields = ['tem_id', 'lib_titulo', 'lib_codigo', 'lib_precio', 'lib_resumen', 'lib_estado'];

    public function ListarLibros()
    {
        return $this->select('tbl_libros.*, tbl_tema.tem_tema')
            ->join('tbl_tema', 'tbl_tema.tem_id = tbl_libros.tem_id')
            ->findAll();
    }

    public function BuscarLibros($codigo){
        return $this->select('tbl_libros.*')
            ->where('tbl_libros.lib_codigo', $codigo)
            ->findAll();
    }
}
