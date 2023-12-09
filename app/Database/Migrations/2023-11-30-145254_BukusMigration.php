<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BukusMigration extends Migration
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
            'judul' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'penulis' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'penerbit' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'sinopsis' => [
                'type'       => 'TEXT',
                'null'      => FALSE
            ],
            'jml_halaman' => [
                'type'       => 'INT',
                'constraint' => '5',
                'unsigned'   => true
            ],
            'created_at'=>[
                'type'=>'DATETIME',
                'null'  =>TRUE
            ],
            'updated_at'=>[
                'type'=>'DATETIME',
                'null'  =>TRUE
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('bukus');
    }

    public function down()
    {
        $this->forge->dropTable('bukus');
    }
}
