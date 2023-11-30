<?php 
namespace App\Models;

use CodeIgniter\Model;

class portadaModel extends Model{
    protected $table      = 'tbl_portada';
    protected $table2 = 'tbl_tema';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'por_id';
    protected $allowedFields = ['por_titulo', 'por_descr', 'por_estado'];

}