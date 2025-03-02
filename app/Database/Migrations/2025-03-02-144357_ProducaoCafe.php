<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProducaoCafe extends Migration
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
            'nome_completo' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
            'estado' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'cidade' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'telefone' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => true,
            ],
            'area_plantada' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
                'null' => true,
            ],
            'variedade_cafe' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'metodos_cultivo' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'producao_safra' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
                'null' => true,
            ],
            'user_id' => [
                'type' => 'INT',
                'null' => true,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('producao_cafe');
    }

    public function down()
    {
        $this->forge->dropTable('producao_cafe');
    }
}