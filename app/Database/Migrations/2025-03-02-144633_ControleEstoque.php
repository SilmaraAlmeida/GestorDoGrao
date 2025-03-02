<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ControleEstoque extends Migration
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
            'nome_produto' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
            'tipo_cafe' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'categoria' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'quantidade_estoque' => [
                'type' => 'INT',
                'null' => true,
            ],
            'preco_compra' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
                'null' => true,
            ],
            'preco_venda' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
                'null' => true,
            ],
            'fornecedor' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'data_compra' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'notas_adicionais' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'user_id' => [
                'type' => 'INT',
                'null' => true,
            ]
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('controle_estoque');
    }

    public function down()
    {
        $this->forge->dropTable('controle_estoque');
    }
}
