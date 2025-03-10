<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MetodosCultivo extends Seeder
{
    public function run()
    {
        $dados = [
            'nome' => [
                'Cultivo Tradicional',
                'Agro Floresta',
                'Sistema de Sombras',
                'Cultivo Orgânico'
            ]
        ];

        $this->db->query('INSERT INTO metodos_cultivo (nome_metodo) VALUES (:nome)', $dados);

        $this->db->table('metodos_cultivo')->insert($dados);
    }
}
