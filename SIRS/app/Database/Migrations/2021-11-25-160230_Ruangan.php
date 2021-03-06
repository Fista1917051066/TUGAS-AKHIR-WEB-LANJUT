<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ruangan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_ruangan'            => [
                'type'              => 'INT',
                'constraint'        => 11,
                'auto_increment'    => true,
            ],
            'kode_ruangan'          => [
                'type'              => 'VARCHAR',
                'constraint'        => 50,
            ],
            'nama_ruangan'           => [
                'type'              => 'VARCHAR',
                'constraint'        => 30,
            ],
            'harga'                 => [
                'type'              => 'INT',
                'constraint'        => 11,
            ],
            'status'           => [
                'type'              => 'VARCHAR',
                'constraint'        => 20,
            ],           
        ]);
        $this->forge->addKey('id_ruangan', true) ;
        $this->forge->createTable('ruangan') ;
    }

    public function down()
    {
        $this->forge->dropTable('ruangan') ;
    }
}