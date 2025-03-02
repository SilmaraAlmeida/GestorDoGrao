<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Vendas extends Migration
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
            'data_venda' => [
                'type' => 'DATE',
                'null' => false,
            ],
            'cliente' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
            'produto' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
            'quantidade' => [
                'type' => 'INT',
                'null' => false,
            ],
            'preco_unitario' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
                'null' => false,
            ],
            'user_id' => [
                'type' => 'INT',
                'null' => true,
            ]
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('vendas');
    }

    public function down()
    {
        $this->forge->dropTable('vendas');
    }
}
