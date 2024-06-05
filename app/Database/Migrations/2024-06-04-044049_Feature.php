<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Feature extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'ftr_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'feature_name' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'feature_type' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'feature_cord_x' => [
                'type' => 'DECIMAL',
                'constraint' => 100
            ],
            'feature_cord_y' => [
                'type' => 'DECIMAL',
                'constraint' => 100
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'TIMESTAMP',
                'null' => true
            ],
            'deleted_at' => [
                'type' => 'TIMESTAMP',
                'null' => true
            ]
        ]);
        $this->forge->addKey('ftr_id', true);
        $this->forge->createTable('feature');
    }

    public function down()
    {
        $this->forge->dropTable('feature');
    }
}
