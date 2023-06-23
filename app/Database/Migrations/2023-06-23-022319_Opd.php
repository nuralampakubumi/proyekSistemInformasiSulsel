<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Opd extends Migration
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
            'nama_instansi_opd' => [
                'type' => 'TEXT',
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
            'tahun_penerapan' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
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
        $this->forge->createTable('opd');
    }

    public function down()
    {
        $this->forge->dropTable('opd');
    }
}
