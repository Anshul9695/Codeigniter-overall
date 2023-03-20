<?php

namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;

class Books extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'issbn_no' => [
                'type'       => 'INT',
            ],
            'author' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'created_date datetime default current_timestamp',
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('books');
    }

    public function down()
    {
        $this->forge->dropTable('books');
    }
}