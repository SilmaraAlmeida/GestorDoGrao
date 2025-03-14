<?php

namespace App\Models;

use CodeIgniter\Model;

class Historico extends Model
{
    protected $table            = 'historico';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id',
        'id_usuario',
        'nome_producao_antigo',
        'nome_producao_novo',
        'estado_antigo',
        'estado_novo',
        'cidade_antigo',
        'cidade_novo',
        'telefone_antigo',
        'telefone_novo',
        'area_plantada_antigo',
        'area_plantada_novo',
        'variedade_cafe_antigo',
        'variedade_cafe_novo',
        'metodo_cultivo_antigo',
        'metodo_cultivo_novo',
        'quantidade_safra_antigo',
        'quantidade_safra_novo',
        'alterado_em',
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
