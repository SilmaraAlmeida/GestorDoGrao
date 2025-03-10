<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TipoCafe extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nome' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('tipo_cafe');
    }

    public function down()
    {
        $this->forge->dropTable('tipo_cafe');
    }
}
