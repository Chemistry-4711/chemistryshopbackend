<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_Inventory extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'unsigned' => true,
                                'auto_increment' => true
                        ),
                        'name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '32',
                        ),
                        'supplier' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '32',
                        ),
                        'quantity' => array(
                                'type' => 'INT'
                        ),
                        'price' => array(
                                'type' => 'INT',
                                'unsigned' => true,
                        ),
                ));
        $this->dbforge->add_key('id', true);
        $this->dbforge->create_table('Inventory');
    }

    public function down()
    {
        $this->dbforge->drop_table('Inventory');
    }
}
