<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MetodosCultivo extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => false,
                'auto_increment' => true,
            ],
            'nome_metodo' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ]
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('metodos_cultivo');
    }

    public function down()
    {
        $this->forge->dropTable('metodos_cultivo');
    }
}
