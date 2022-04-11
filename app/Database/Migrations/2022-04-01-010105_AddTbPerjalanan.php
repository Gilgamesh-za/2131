<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTbPerjalanan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_perjalanan' => [
                'type' => 'INT',
                'constraint' => '11',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'id_user' => [
                'type' => 'VARCHAR',
                'constraint' => '50'
            ],
            'lokasi' => [
                'type' => 'TEXT',
            ],
            'tanggal' => [
                'type' => 'DATE',
            ],
            'waktu' => [
                'type' => 'TIME',
                'constraint' => '6'
            ],
            'ket' => [
                'type' => 'TEXT',
            ],
            'created_at' => [
                'type' => 'DATETIME',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
        ]);

        $this->forge->addKey('id_perjalanan', true);
        $this->forge->createTable('tb_perjalanan');
    }

    public function down()
    {
        //
        $this->forge->dropTable('tb_perjalanan');
    }
}
