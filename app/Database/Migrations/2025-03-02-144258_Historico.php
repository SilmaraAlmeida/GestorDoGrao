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
            'nome_tabela' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false,
            ],
            'nome_coluna' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false,
            ],
            'valor_antigo' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'novo_valor' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'alterado_por' => [
                'type' => 'INT',
                'null' => false,
            ],
            'alterado_em' => [
                'type' => 'TIMESTAMP',
                'null' => true,
                'default' => 'CURRENT_TIMESTAMP',
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('alterado_por', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('historico');
    }

    public function down()
    {
        $this->forge->dropTable('historico');
    }
}
