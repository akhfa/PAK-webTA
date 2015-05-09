<?php
/**
 * Created by PhpStorm.
 * User: akhfa
 * Date: 09/05/15
 * Time: 20:15
 */

class Paper_Migration extends CI_Migration{
    public function up()
    {
        $this->dbforge->add_field(array(
            'paper_id' => array(
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'judul' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'tema' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'penulis' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'universitas' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'tahun' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'abstrak' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'bidang' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
        ));
        $this->dbforge->add_key('paper_id', TRUE);
        $this->dbforge->add_key('judul', TRUE);
        $this->dbforge->create_table('papers');
    }
    public function down()
    {
        $this->dbforge->drop_table('papers');
    }
}