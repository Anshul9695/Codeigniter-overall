<?php

namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;

class Student extends Migration
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
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'phone' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'address'=>[
                'type'=>'VARCHAR',
                'constraint'=>'100',
            ],
            'image'=>[
                'type'=>'VARCHAR',
                'constraint'=>'100',
                'default'=>'NULL',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('student');
    }

    public function down()
    {
        $this->forge->dropTable('student');
    }
}