<?php

namespace App\Models;

use CodeIgniter\Model;

class modelTema extends Model
{
    protected $table      = 'tbl_tema';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'tem_id';
    protected $allowedFields = ['tem_tema', 'tem_estado'];

    public function ListarTemas()
    {
        return $this->select('tbl_libros.*, tbl_tema.tem_tema, tbl_librostema.*')
            ->join('tbl_librostema', 'tbl_librostema.lib_id = tbl_libros.lib_id')
            ->join('tbl_tema', 'tbl_tema.tem_id = tbl_librostema.tem_id')
            ->findAll();
    }
}
