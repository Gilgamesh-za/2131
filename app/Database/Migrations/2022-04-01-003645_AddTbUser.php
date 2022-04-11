<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTbUser extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_user' => [
                'type' => 'INT',
                'constraint' => '11',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'nik' => [
                'type' => 'VARCHAR',
                'constraint' => '20'
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => '30'
            ],
            'alamat' => [
                'type' => 'TEXT'
            ],
            'gender' => [
                'type' => 'ENUM',
                'constraint' => ['Laki-laki', 'Perempuan'],
                'default' => 'Laki-laki'
            ],
            'akses' => [
                'type' => 'ENUM',
                'constraint' => ['admin', 'user'],
                'default' => 'user'
            ],
            'hp' => [
                'type' => 'VARCHAR',
                'constraint' => '20'
            ],
            'created_at' => [
                'type' => 'INT',
                'constraint' => '11'
            ],
            'updated_at' => [
                'type' => 'INT',
                'constraint' => '11'
            ],
        ]);

        $this->forge->addKey('id_user', true);
        $this->forge->createTable('tb_user');
    }

    public function down()
    {
        //
        $this->forge->dropTable('tb_user');
    }
}
