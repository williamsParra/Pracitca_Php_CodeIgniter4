<?php

namespace App\Models;

use CodeIgniter\Model;

class PeliculaModel extends Model
{
    protected $table      = 'peliculas';
    protected $primaryKey = 'pelicula_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['categoria_id', 'nombre','stock','valor_venta','valor_arriendo'];

    protected $useTimestamps = true;
    protected $createdField  = 'creadp';
    protected $updatedField  = 'modificado';
    protected $deletedField  = 'eliminado';

}