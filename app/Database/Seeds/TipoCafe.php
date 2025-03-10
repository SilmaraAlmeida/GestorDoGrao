<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TipoCafe extends Seeder
{
    public function run()
    {
        $dados = [
            'nome' => [
                'Arábica',
                'Conilon',
                'Libérica',
                'Excelsa',
                'Catucaí',
                'Mundo Novo',
            ]
        ];

        $this->db->query('INSERT INTO tipo_cafe (nome) VALUES (:nome)', $dados);

        $this->db->table('tipo_cafe')->insert($dados);
    }
}
