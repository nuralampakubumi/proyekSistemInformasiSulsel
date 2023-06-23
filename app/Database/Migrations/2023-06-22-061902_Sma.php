<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Sma extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'BIGINT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'asal_sekolah' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'no_hp' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'judul' => [
                'type' => 'TEXT',
            ],
            'ringkasan' => [
                'type' => 'TEXT',
            ],
            'link' => [
                'type' => 'TEXT',
            ],
            'status' => [
                'type' => 'ENUM',
                'constraint' => ['lolos', 'tidak_lolos'],
                'defauld' => 'tidak_lolos',
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('sma');
    }

    public function down()
    {
        $this->forge->dropTable('sma');
    }
}
