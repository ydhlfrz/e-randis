<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Randistable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_randis' => [
                'type' => 'BIGINT',
                'constraint' => 20,
                'unsigned' => true,
                'auto_increment' => true
            ],
    
            'id_opd' => [
                'type' => 'BIGINT',
                'constraint' => '20',
                'unsigned' => true
            ],
    
            'id_group' => [
                'type' => 'BIGINT',
                'constraint' => '20',
                'unsigned' => true
            ],

            'jenis' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'merk' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'no_rang' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'no_mesin' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'th_pembuatan' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'th_perolehan' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'no_pol' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'kondisi' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'pengguna' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],

            'ket' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],

            'dokumen' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_randis', true);
        $this->forge->addForeignkey('id_opd', 'opd', 'id_opd');
        $this->forge->addForeignkey('id_group', 'groups', 'id_group');
        $this->forge->createTable('randisapp');
    }

    public function down()
    {
        $this->forge->dropForeignKey('randisapp', 'randisapp_id_opd_foreign');
        $this->forge->dropForeignKey('randisapp', 'randisapp_id_group_foreign');
        $this->forge->dropTable('randisapp');
    }
}
