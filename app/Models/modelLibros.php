<?php

namespace App\Models;

use CodeIgniter\Model;

class modelLibros extends Model
{
    protected $table      = 'tbl_libros';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'lib_id';
    protected $allowedFields = ['lib_titulo', 'lib_codigo', 'lib_precio', 'lib_resumen', 'lib_estado'];

    public function ListarLibros()
    {
        $query = $this->db->table('tbl_librostema lit')
            ->select('lib.lib_id', 'lib.lib_titulo', 'lib.lib_codigo', 'lib.lib_precio', 'lib.lib_resumen', 'lib.lib_estado', 'tem.tem_id', 'tem.tem_tema', 'lit.lib_id', 'lit.tem_id')
            ->join('tbl_libros lib', 'lit.lib_id = lib.lib_id')
            ->join('tbl_tema tem', 'tem.tem_id = lit.tem_id')
            ->get();

        return $query->getResultArray();
    }

    public function ListarTemas()
    {
        $query = $this->db->table('tbl_tema tem')
            ->select('tem.tem_id, tem.tem_tema')
            ->get();

        return $query->getResultArray();
    }

    public function BuscarLibros($codigo)
    {
        return $this->select('tbl_libros.*, tbl_tema.tem_tema')
            ->where('tbl_libros.lib_codigo', $codigo)
            ->join('tbl_librostema', 'tbl_librostema.lib_id = tbl_libros.lib_id')
            ->join('tbl_tema', 'tbl_tema.tem_id = tbl_librostema.tem_id')
            ->first();
    }
}
