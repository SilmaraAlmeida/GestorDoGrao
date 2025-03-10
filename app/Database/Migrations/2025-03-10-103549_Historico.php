<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Historico extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'nome_producao_antigo' => [
                'type' => 'VARCAHR',
                'constraint' => 150,
            ],
            'nome_producao_novo' => [
                'type' => 'VARCAHR',
                'constraint' => 150,
            ],
            'estado_antigo' => [
                'type' => 'VARCAHR',
                'constraint' => 40,
            ],
            'estado_novo' => [
                'type' => 'VARCAHR',
                'constraint' => 40,
            ],
            'cidade_antigo' => [
                'type' => 'VARCAHR',
                'constraint' => 40,
            ],
            'cidade_novo' => [
                'type' => 'VARCAHR',
                'constraint' => 40,
            ],
            'telefone_antigo' => [
                'type' => 'VARCAHR',
                'constraint' => 20,
            ],
            'telefone_novo' => [
                'type' => 'VARCAHR',
                'constraint' => 150,
            ],
            'area_plantada_antigo' => [
                'type' => 'decimal',
                'constraint' => 10,2,
            ],
            'area_plantada_novo' => [
                'type' => 'decimal',
                'constraint' => 10,2,
            ],
            'variedade_cafe_antigo' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'metodo_cultivo_antigo' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'metodo_cultivo_novo' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'quantidade_safra_antigo' => [
                'type' => 'decimal',
                'constraint' => 10,2,
            ],
            'quantidade_safra_novo' => [
                'type' => 'decimal',
                'constraint' => 10,2,
            ],
            'acao' => [
                'type' => 'ENUM',
                'constraint' => ['INSERT', 'UPDATE', 'DELETE'],
            ],
            'alterado_por' => [
                'type' => 'INT',
                'constraint' => 1000,
            ],
            'alterado_em' => [
                'type' => 'TIMESTAMP',
            ]
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('historico');
    }

    public function down()
    {
        $this->forge->dropTable('historico');
    }

}
