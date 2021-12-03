<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RawatInap extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_rawatinap'          => [
                'type'              => 'INT',
                'constraint'        => 11,
                'auto_increment'    => true,
            ],
            'kode_rawatinap'          => [
                'type'              => 'VARCHAR',
                'constraint'        => 50,
            ],
            'kode_dokter'              => [
                'type'              => 'VARCHAR',
                'constraint'        => 50,
            ],
            'nama_dokter'           => [
                'type'              => 'VARCHAR',
                'constraint'        => 50,
            ],
            'kode_pasien'              => [
                'type'              => 'VARCHAR',
                'constraint'        => 50,
            ],
            'nama_pasien'           => [
                'type'              => 'VARCHAR',
                'constraint'        => 50,
            ],
            'nohp_pasien'           => [
                'type'              => 'VARCHAR',
                'constraint'        => 20,
            ],
            'alamat_pasien'         => [
                'type'              => 'VARCHAR',
                'constraint'        => 30,
            ],
            'kode_ruangan'             => [
                'type'              => 'VARCHAR',
                'constraint'        => 50,
            ],
            'tglmasuk'              => [
                'type'              => 'DATE',
            ],
            'catatanmedis'          => [  
                'type'              =>'VARCHAR',
                'constraint'        => 225,
            ],
            'nama_ruangan'           => [
                'type'              => 'VARCHAR',
                'constraint'        => 30,
            ],
            'harga'                 => [
                'type'              => 'INT',
                'constraint'        => 11,
            ],
            'lamarawat'                 => [
                'type'              => 'INT',
                'constraint'        => 11,
            ],
        ]);
        $this->forge->addKey('id_rawatinap', true) ;
        $this->forge->createTable('rawatinap') ;
    }

    public function down()
    {
        $this->forge->dropTable('rawatinap') ;
    }
}