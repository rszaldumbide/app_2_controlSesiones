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
        $valor = $this->db->table('tbl_librostema lit'); //tabla intermedia
        $valor->select('lib.lib_id, lib.lib_titulo, lib.lib_codigo, lib.lib_precio, lib.lib_resumen, lib.lib_estado, tem.tem_id, tem.tem_tema'); //selecciono todos los campos de todas las tablas que quiero
        $valor->join('tbl_libros lib', 'lit.lib_id = lib.lib_id'); //join con la tabla estudiantes
        $valor->join('tbl_tema tem', 'tem.tem_id = lit.tem_id'); //join con la tabla libros
        $query = $valor->get(); //ejecutas
        $respuesta = $query->getResultArray(); //te muestra los datos como array
        return $respuesta;
    }

    public function ListarTemas()
    {
        $valor = $this->db->table("tbl_tema");
        $valor->select('tem_id, tem_tema');
        $query = $valor->get(); //ejecutas
        $respuesta = $query->getResultArray(); //te muestra los datos como array
        return $respuesta;
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
